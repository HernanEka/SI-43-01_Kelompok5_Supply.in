<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;


class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Product::all();
        $i = 1;
        return view('admin.produk', compact('produk','i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambah_produk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $produk = new Product;
        $produk->nama_product = $request->nama_product;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;
        $produk->stock = $request->stock;
        $produk->unit = $request->unit;
        $produk->kategori = $request->kategori;
        $produk->gambar = $request->file('gambar')->store('foto-product');
        
        $produk->save();

        return redirect('/admin/produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produk = Product::find($id);
        $produk->nama_product = $request->nama_product;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;
        $produk->stock = $request->stock;
        $produk->unit = $request->unit;
        $produk->kategori = $request->kategori;
        $produk->gambar = $request->file('gambar')->store('foto-product');
        
        $produk->save();

        return redirect('/admin/produk');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Product::find($id);

        Storage::delete($produk->image);

        $produk->delete();

        return redirect('/admin/produk');
    }
}
