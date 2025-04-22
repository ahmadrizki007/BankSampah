<?php

namespace App\Http\Controllers;

use App\Models\Formulir;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormulirController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function indexUser()
    {
        return view('formulir');
    }
    public function indexAdmin()
    {
        $data = Formulir::all();
        return view('admins.formulir', [
            'data' => $data,
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => ['required'],
            'email' => ['required'],
            'nomor_telepon' => ['required'],
            'instansi' => ['required'],
            'tujuan_kunjungan' => ['required'],
        ], [
            'nama_lengkap.required' => 'Nama Lengkap harus diisi',
            'email.required' => 'Email harus diisi',
            'nomor_telepon.required' => 'Nomor Telepon harus diisi',
            'instansi.required' => 'Instansi harus diisi',
            'tujuan_kunjungan.required' => 'Tujuan Kunjungan harus diisi',
        ]);

        try {
            DB::beginTransaction();

            Formulir::create([
                'nama_lengkap' => $request->nama_lengkap,
                'email' => $request->email,
                'nomor_telepon' => $request->nomor_telepon,
                'instansi' => $request->instansi,
                'tujuan_kunjungan' => $request->tujuan_kunjungan,
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

        return redirect()->back()->with('success', 'Berhasil mengirim formulir kunjungan');
    }


}
