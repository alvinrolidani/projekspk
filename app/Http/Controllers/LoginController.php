<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function authenticate(Request $request)
    {
        $validasi = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($validasi)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }
        return back()->with('error', 'Email atau Kata sandi salah');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
    public function register()
    {
        return view('register');
    }
    public function doregist(Request $request)
    {

        $validasi = $request->validate(
            [
                'name' => 'required|max:255',
                'username' => 'required|max:255|unique:users',
                'password' => 'required_with:password1|min:6|max:255|same:password_confirmation',
                'password_confirmation' => 'min:6|same:password',


            ],
            [
                'username.unique' => 'Username, gunakan username lain!',
                'username.required' => 'Harap Masukkan Username!',
                'name.required' => 'Harap Masukkan Nama!',
                'password.required' => 'Harap Masukkan Password!',
                'password.min' => 'Kata Sandi Minimal 6 Karakter!',
                'password.same' => 'Kata Sandi Tidak Sama!',
                'password_confirmation.same' => 'Kata Sandi Tidak Sama!',
                'password_confirmation.min' => 'Kata Sandi Minimal 6 Karakter!',
            ]
        );

        $validasi['password'] = bcrypt($validasi['password']);
        $password1 =  $validasi['password_confirmation'] = bcrypt($validasi['password_confirmation']);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => $password1,
            'gambar' => "default.png",

        ]);
        return redirect('/login')->with('success', 'Berhasil Mendaftar Silahkan Login');
    }
}
