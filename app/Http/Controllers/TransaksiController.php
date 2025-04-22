<?php

namespace App\Http\Controllers;

use App\Models\DataSampah;
use App\Models\DonasiGajah;
use App\Models\Penarikan;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function indexDashboard()
    {
        $id = Auth::user()->id;
        $tabunganGajah = Transaksi::where('user_id', $id)->get();
        $penarikan = Penarikan::where('user_id', $id)->get();
        $donasiGajah = DonasiGajah::where('user_id', $id)->get();

        $tabunganGajah = $tabunganGajah->map(function ($item) {
            $item->transaksi = 'Tabungan Gajah';
            return $item;
        });
        $penarikan = $penarikan->map(function ($item) {
            $item->transaksi = 'Penarikan Saldo';
            $item->harga = $item->jumlah_penarikan;
            return $item;
        });
        $donasiGajah = $donasiGajah->map(function ($item) {
            $item->transaksi = 'Donasi Gajah';
            $item->harga = $item->donasi;
            return $item;
        });

        $data = $tabunganGajah
            ->concat($penarikan)
            ->concat($donasiGajah)
            ->sortBy('created_at')
            ->values();

        // formatting created_at
        $data = $this->createdAtFormatter($data);

        return view('dashboard', [
            'data' => $data,
        ]);
    }

    public function indexTransaksi()
    {
        $id = Auth::user()->id;
        $data = Transaksi::where('user_id', $id)->get();

        // formatting created_at
        $data = $this->createdAtFormatter($data);

        return view('transaksi', [
            'data' => $data,
        ]);
    }

    public function indexAdmin()
    {
        $data = Transaksi::with(('user'))->get();
        $dataJenisSampah = DataSampah::all();

        // dd($data);

        // create token for api fetching data
        $token = Auth::user()->createToken(Auth::user()->name)->plainTextToken;

        return view('admins.data-transaksi', [
            'data' => $data,
            'dataJenisSampah' => $dataJenisSampah,
            'token' => $token,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeAdmin(Request $request)
    {
        $request->validate(
            [
                'user_id' => 'required',
                'berat' => 'required|numeric',
                'jenis_sampah' => 'required',
            ],
            [
                'user_id.required' => 'Nama nasabah harus diisi',
                'berat.required' => 'Berat harus diisi',
                'berat.numeric' => 'Berat harus berupa angka',
                'jenis_sampah.required' => 'Jenis Sampah harus diisi',
            ]
        );

        try {
            // calculate harga based on jenis sampah
            $hargaJenisSampah = DataSampah::where('id', $request->jenis_sampah)->first();
            $harga = $request->berat * (int) $hargaJenisSampah->harga;
            $user_id = $request->input('user_id');

            DB::beginTransaction();

            Transaksi::create([
                'user_id' => (int) $user_id,
                'berat' => (string) $request->berat,
                'harga' => (string) $harga,
            ]);

            $user = User::find((int) $user_id);
            $user->balance = $user->balance + (int) $harga;
            $user->save();

            DB::commit();

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(
                [
                    'error' => [
                        'message' => 'Terjadi kesalahan pada server',
                    ],
                ]
            )->withInput();
        }
        return redirect()->back()->with('success', 'Data transaksi berhasil disimpan');

    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
