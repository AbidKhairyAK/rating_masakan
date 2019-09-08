<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password], true)) {
            return redirect()->intended('/');
        }
        return redirect('/login');
    }

    public function signup()
    {
        return view('signup');
    }

    public function register(Request $request)
    {
        $checkpass = $request->password !== $request->password_confirmation;
        $checkname = DB::table('users')->where('username', $request->username)->exists();
        if ($checkpass || $checkname) {
            return redirect('/signup');
        }
        DB::table('users')->insert([
            'username' => $request->username,
            'password' => bcrypt($request->password)
        ]);
        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
