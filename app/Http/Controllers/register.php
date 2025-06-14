<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\http\profile;

class register extends Controller
{
     public function index()
    {
        return view('register'); // Menampilkan view "sign.blade.php"
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // Validasi data yang diterima dari form
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:5|confirmed',
        ]);

        // Simpan data pengguna baru ke dalam database
        \App\Models\User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt(value: $request->password),

        ]);

        // Redirect atau tampilkan pesan sukses
        return redirect()->route('login')->with('success', 'Registration successful! You can now log in.');
    }
}
