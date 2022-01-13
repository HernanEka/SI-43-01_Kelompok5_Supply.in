<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {

        // return $request->all();
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {

            $user = User::where('email','=',$request->email)->first();

            session(['id' => $user->id]);
            session(['nama' => $user->nama_user]);

            if ($user->level == 2) {

                return redirect('/admin');

            }else{

                return redirect('/');
            
            }

        }

        return back()->with([
            'gagal' => 'The provided credentials do not match our records.',
        ]);
    }
    public function logout(Request $request)
    {
        $request->session()->flush();

        return redirect('/login');
    }
}
