<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class RegistrasiController extends Controller
{
    public function regis(Request $request)
    {
        $validate = $request->validate([

            'nama_user' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
            'phone' => 'required',
            'address' => 'required'

        ]);

        $validate['password'] = Hash::make($validate['password']);

        User::create($validate);

        return redirect('/login')->with('success', 'Berhasil Membuat Akun !');
    }
}
