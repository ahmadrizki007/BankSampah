<?php

namespace App\Http\Controllers;

use App\Models\DataSampah;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

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
            'jenis_sampah' => 'required|max:255|unique:App\Models\DataSampah,jenis_sampah',
            'harga' => 'required|numeric',
        ], [
            'jenis_sampah.required' => 'Jenis Sampah harus diisi',
            'jenis_sampah.max' => 'Jenis Sampah maksimal 255 karakter',
            'jenis_sampah.unique' => 'Jenis Sampah sudah ada',
            'harga.required' => 'Harga harus diisi',
            'harga.numeric' => 'Harga harus berupa angka',
        ]);

        try {

            DB::beginTransaction();

            DataSampah::create([
                'jenis_sampah' => ucfirst($request->jenis_sampah),
                'harga' => (string) $request->harga,
            ]);

            DB::commit();

        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors([
                'error' => [
                    'message' => 'Terjadi kesalahan server',
                ]
            ]);
        }

        return redirect()->back()->with('success', 'Data Sampah berhasil ditambahkan');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id = $request->input('id');

        $jenisSampahField = 'jenis_sampah_' . (string) $id;
        $hargaField = 'harga_' . (string) $id;

        $request->validate([
            $jenisSampahField => ['required', 'max:255', Rule::unique('data_sampah', 'jenis_sampah')->ignore($id)],
            $hargaField => ['required', 'numeric'],
        ], [
            $jenisSampahField . '.required' => 'Jenis Sampah Harus diisi',
            $jenisSampahField . '.max' => 'Jenis Sampah maksimal 255 karakter',
            $jenisSampahField . '.unique' => 'Jenis Sampah sudah ada',
            $hargaField . '.required' => 'Harga harus diisi',
            $hargaField . '.numeric' => 'Harga harus berupa angka',
        ]);

        try {
            DB::beginTransaction();

            $data = DataSampah::find($id);
            $data->jenis_sampah = $request['jenis_sampah_' . (string) $id];
            $data->harga = $request['harga_' . (string) $id];
            $data->save();

            DB::commit();

        } catch (Exception $e) {
            DB::rollback();

            return redirect()->back()->withErrors([
                'error' => [
                    'message' => 'Terjadi kesalahan server',
                ]
            ]);
        }

        return redirect()->back()->with('success', 'Data Sampah berhasil diperbarui');
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
