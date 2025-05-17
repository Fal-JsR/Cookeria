<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login extends Controller
{
    public function index()
    {
        return view('login'); // Menampilkan view "home.blade.php"
    }
    public function store(Request $request)
    {
        // dd($request->all());
        // Validasi data yang diterima dari form
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:5',
        ]);

        // Cek kredensial pengguna
        if (auth()->attempt($request->only('email', 'password'))) {
            // Jika berhasil, redirect ke halaman dashboard atau halaman lain
            return redirect()->route('home')->with('success', 'Login successful!');
        }

        // Jika gagal, kembali ke halaman login dengan pesan error
        return redirect()->back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }
    public function logout(Request $request)
    {
        auth()->logout();
        

        return redirect('/')->with('success', 'Logout successful!');
    }
}
