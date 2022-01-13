<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class KategoriController extends Controller
{
    public function index()
    {
        return view('produk');
    }

    public function show(Product $produk)
    { 
        return view('produk');
    }
}
