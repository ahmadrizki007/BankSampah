<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Transaksi::all();
        return view('admins.data-transaksi', [
            'data' => $data,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama_nasabah' => 'required|max:255',
                'berat' => 'required|numeric',
                'harga' => 'required|numeric',
            ],
            [
                'nama_nasabah.required' => 'Nama nasabah harus diisi',
                'nama_nasabah.max' => 'Nama nasabah maksimal 255 karakter',
                'berat.required' => 'Berat harus diisi',
                'berat.numeric' => 'Berat harus berupa angka',
                'harga.required' => 'Harga harus diisi',
                'harga.numeric' => 'Harga harus berupa angka',
            ]
        );

        try {

            DB::beginTransaction();

            Transaksi::create([
                'nama_nasabah' => $request->nama_nasabah,
                'berat' => (string) $request->berat,
                'harga' => (string) $request->harga,
            ]);

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
