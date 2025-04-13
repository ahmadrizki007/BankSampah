<?php

namespace App\Http\Controllers;

use App\Models\DataSampah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataSampahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DataSampah::all();
        return view('admins.data-sampah', [
            'data' => $data,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'jenis_sampah' => 'required|max:255',
            'harga' => 'required|numeric',
        ], [
            'jenis_sampah.required' => 'Jenis Sampah harus diisi',
            'jenis_sampah.max' => 'Jenis Sampah maksimal 255 karakter',
            'harga.required' => 'Harga harus diisi',
            'harga.numeric' => 'Harga harus berupa angka',
        ]);

        try {

            DB::beginTransaction();

            DataSampah::create([
                'jenis_sampah' => $request->jenis_sampah,
                'harga' => (string) $request->harga,
            ]);

            DB::commit();

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(
                [
                    'error' => [
                        'message' => 'Terjadi kesalahan pada server',
                    ]
                ]
            );
        }

        return redirect()->back()->with('success', 'Data Sampah berhasil ditambahkan');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataSampah $dataSampah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $del = DataSampah::where('id', $id)->first();
        if ($del) {
            $del->delete();

            return redirect()->back()->with('success', 'Data Sampah berhasil dihapus');
        } else {
            return redirect()->back()->withErrors(
                [
                    'error' => [
                        'message' => 'Data Sampah tidak ditemukan',
                    ]
                ]
            );
        }

    }
}
