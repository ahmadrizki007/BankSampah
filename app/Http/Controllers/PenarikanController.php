<?php

namespace App\Http\Controllers;

use App\Models\Penarikan;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class PenarikanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexPenarikan()
    {
        $id = Auth::user()->id;
        $data = Penarikan::where('user_id', $id)->get();

        // formatting created_at
        $data = $this->createdAtFormatter($data);

        return view('penarikan', [
            'data' => $data,
        ]);
    }

    public function indexAdmin()
    {
        $data = Penarikan::with('user')->get();

        // formatting created_at
        $data = $this->createdAtFormatter($data);

        return view('admins.validasi-penarikan', [
            'data' => $data,
        ]);
    }

    /**
     * Actions.
     */
    public function terimaPenarikan(Request $request)
    {

        $isSaldoTidakCukup = false;

        try {
            $user_id = $request->input('user_id');
            $id = $request->input('id');
            $jumlah_penarikan = $request->input('jumlah_penarikan');

            DB::beginTransaction();

            $user = User::find((int) $user_id);
            $result = (int) $user->balance - (int) $jumlah_penarikan;

            if ($result >= 0) {
                Penarikan::where('user_id', $user_id)->where('id', $id)->update(['state' => 'accepted']);
                $user->balance = (string) $result;
                $user->save();
            } else {
                Penarikan::where('user_id', $user_id)->where('id', $id)->update(['state' => 'rejected']);

                $isSaldoTidakCukup = true;
            }

            DB::commit();

        } catch (Exception $e) {
            DB::rollBack();

            return redirect()->back()->withErrors([
                'error' => [
                    'message' => 'Terjadi kesalahan server',
                ]
            ]);
        }


        if ($isSaldoTidakCukup) {

            return redirect()->back()->withErrors([
                'error' => [
                    'message' => 'Saldo tidak cukup',
                ]
            ]);
        }

        return redirect()->back()->with('success', 'Berhasil mengganti status');
    }

    public function tolakPenarikan(Request $request)
    {
        try {
            $user_id = $request->input('user_id');
            $id = $request->input('id');
            DB::beginTransaction();

            Penarikan::where('user_id', $user_id)->where('id', $id)->update(['state' => 'rejected', 'catatan' => $request->input('note')]);

            DB::commit();

            // Getting user data
            $user = User::find($user_id);
            $penarikan = Penarikan::find($id);

            // Sending email when the withdraw is rejected
            Mail::send('admins.emails.reject', [
                'tanggal' => $penarikan->created_at->format('d F Y'),
                'nama' => $user->name,
                'jumlah' => $penarikan->jumlah_penarikan,
                'catatan' => $request->input('note')
            ], function ($message) use ($user) {
                $message->to($user->email)
                    ->subject('Penarikan Saldo Ditolak');
            });

        } catch (Exception $e) {
            DB::rollBack();


            // dd($e);
            return redirect()->back()->withErrors([
                'error' => [
                    'message' => 'Terjadi kesalahan server',
                ]
            ]);
        }

        return redirect()->back()->with('success', 'Berhasil mengganti status');
    }


    public function tarikSaldo(Request $request)
    {
        try {
            $nominal = $request->input('nominal');

            // double check if user inputin minus (-)
            $nominal = str_replace(['.', '-'], '', $nominal);

            // extra validation for security
            $balance = User::where('id', AUTH::user()->id)->first('balance');

            if ($balance) {
                if ((int) $nominal > (int) $balance->balance) {
                    return redirect()->back()->withErrors([
                        'saldo' => [
                            'message' => 'Saldo tidak cukup',
                        ]
                    ]);
                }
            }

            DB::beginTransaction();

            Penarikan::create([
                'jumlah_penarikan' => $nominal,
                'user_id' => (int) Auth::user()->id,
            ]);

            DB::commit();

        } catch (Exception $e) {
            DB::rollBack();
            dd($e);
            return redirect()->back()->withErrors([
                'error' => [
                    'message' => 'Terjadi kesalahan server',
                ]
            ]);
        }

        return redirect()->back()->with('success', 'Berhasil membuat permintaan penarikan saldo');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penarikan $penarikan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penarikan $penarikan)
    {
        //
    }
}
