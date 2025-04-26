<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Program;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::all();
        return view('admins.produk.produk', [
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dataProgram = Program::all();
        return view('admins.produk.produk-tambah', [
            'dataProgram' => $dataProgram,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => ['required', 'image', 'max:5120', 'mimes:jpg,png,jpeg'],
            'nama' => ['required', 'unique:App\Models\Product,nama'],
            'harga' => ['required'],
            'program_id' => ['required'],
        ], [
            'gambar.required' => 'Gambar harus diisi',
            'gambar.image' => 'Gambar tidak valid',
            'gambar.max' => 'Gambar maksimal 5 MB',
            'gambar.mimes' => 'Gambar harus berupa .jpeg .jpg .png',
            'nama.required' => 'Nama harus diisi',
            'nama.unique' => 'Nama produk sudah ada',
            'harga' => 'Harga harus diisi',
            'program_id' => 'Program harus diisi',
        ]);

        if ((int) $request->harga < 500) {
            return redirect()->back()->withErrors(
                [
                    'harga' => [
                        'message' => 'Harga minimal Rp 500',
                    ],
                ]
            )->withInput();
        }


        if (!$request->hasFile('gambar')) {
            return redirect()->back()->withErrors([
                'error' => [
                    'message' => 'Upload gambar terlebih dahulu',
                ]
            ]);
        }

        try {
            $harga = str_replace('.', '', $request->harga);

            // simpan img di public/produk_img
            $namaImg = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('produk_img'), $namaImg);
            $pathGambar = 'produk_img/' . (string) $namaImg;

            DB::beginTransaction();

            Product::create([
                'gambar' => $pathGambar,
                'nama' => $request->nama,
                'harga' => $harga,
                'program_id' => (int) $request->program_id,
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

        return redirect(route('admin.produk'))->with('success', 'Berhasil menambah produk');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Product::where('id', $id)->first();
        $dataProgram = Program::all();
        return view('admins.produk.produk-edit', [
            'data' => $data,
            'dataProgram' => $dataProgram,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $id = $request->input('id');

        $request->validate([
            'gambar' => ['image', 'max:5120', 'mimes:jpg,png,jpeg'],
            'nama' => ['required', Rule::unique('products')->ignore($id)],
            'harga' => ['required'],
            'program_id' => ['required'],
        ], [
            'gambar.image' => 'Gambar tidak valid',
            'gambar.max' => 'Gambar maksimal 5 MB',
            'gambar.mimes' => 'Gambar harus berupa .jpeg .jpg .png',
            'nama.required' => 'Nama harus diisi',
            'nama.unique' => 'Nama produk sudah ada',
            'harga' => 'Harga harus diisi',
            'program_id' => 'Program harus diisi',
        ]);
        $harga = str_replace('.', '', $request->harga);
        if ((int) $harga < 500) {
            return redirect()->back()->withErrors(
                [
                    'harga' => [
                        'message' => 'Harga minimal Rp 500',
                    ],
                ]
            )->withInput();
        }

        try {
            

            if ($request->hasFile('gambar')) {
                // simpan img di public/produk_img
                $namaImg = time() . '.' . $request->gambar->extension();
                $request->gambar->move(public_path('produk_img'), $namaImg);
                $pathGambar = 'produk_img/' . (string) $namaImg;
            }

            DB::beginTransaction();

            $data = Product::find($id);

            if ($request->hasFile('gambar') && isset($pathGambar)) {
                $data->gambar = $pathGambar;
            }

            $data->nama = $request->nama;
            $data->harga = $harga;
            $data->program_id = (int) $request->program_id;
            $data->save();

            DB::commit();

        } catch (Exception $e) {
            DB::rollBack();

            return redirect()->back()->withErrors([
                'error' => [
                    'message' => 'Terjadi kesalahan server',
                ]
            ]);
        }

        return redirect(route('admin.produk'))->with('success', 'Berhasil melakukan edit produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->input('id');
        $del = Product::where('id', $id)->first();
        $path = public_path($del->gambar);

        if ($del && File::exists($path)) {

            $del->delete();
            File::delete($path);

            return redirect()->back()->with('success', 'Berhasil menghapus produk');
        } else {
            return redirect()->back()->withErrors([
                'error' => [
                    'message' => 'Data produk tidak ditemukan',
                ]
            ]);
        }
    }
}
