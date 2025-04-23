<?php

namespace App\Http\Controllers;

use App\Models\Penarikan;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        try {
            $user_id = $request->input('user_id');
            $id = $request->input('id');
            $jumlah_penarikan = $request->input('jumlah_penarikan');

            DB::beginTransaction();

            Penarikan::where('user_id', $user_id)->where('id', $id)->update(['state' => 'accepted']);
            $user = User::find((int) $user_id);
            $user->balance = (string) ((int) $user->balance - (int) $jumlah_penarikan);
            $user->save();

            DB::commit();

        } catch (Exception $e) {
            DB::rollBack();

            return redirect()->back()->withErrors([
                'error' => [
                    'message' => 'Terjadi kesalahan server',
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

            Penarikan::where('user_id', $user_id)->where('id', $id)->update(['state' => 'rejected']);

            DB::commit();

        } catch (Exception $e) {
            DB::rollBack();

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

            DB::beginTransaction();
            $nominal = str_replace('.', '', $nominal);

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
