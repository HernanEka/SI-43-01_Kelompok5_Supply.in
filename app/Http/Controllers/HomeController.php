<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\Storage;



class HomeController extends Controller
{
    public function index()
    {
        $produk = Product::all();
        return view('home', compact('produk'));
    }

    public function detail($id)
    {
        $produk = Product::find($id);
        return view('detail', compact('produk'));
    }

    public function cart()
    {
        $user_id = session('id');
        $i = 1;
        $order = Order::where('user_id','=',$user_id)->get();
        return view('cart', compact('order','i'));
    }

    public function bayar(Request $request, $id)
    {
        $order = Order::find($id);

        $order->bukti_bayar = $request->file('bukti')->store('foto-bukti');
        $order->status = 2;
        $order->save();

        return redirect('/cart');

    }
}
