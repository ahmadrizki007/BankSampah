<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = '';
        return view('admins.produk.produk', [
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.produk.produk-tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());

        $request->validate([
            'gambar' => ['required', 'image', 'max:5120', 'mimes:jpg,png,jpeg'],
            'nama' => ['required'],
            'harga' => ['required'],
        ]);

        try {
            $harga = str_replace('.', '', $request->harga);

            // simpan img di public/produk_img
            $namaImg = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('produk_img'), $namaImg);
            $path = 'produk_img/' . (string) $namaImg;

            DB::beginTransaction();

            Product::create([
                'gambar' => $path,
                'nama' => $request->nama,
                'harga' => $harga,
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
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
