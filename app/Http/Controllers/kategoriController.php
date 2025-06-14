<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resep;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class KategoriController extends Controller
{
    public function show($kategori)
    {
        // Ambil semua resep berdasarkan kategori, beserta data user pembuat resep
        $reseps = Resep::with('user')
            ->where('kategori', $kategori)
            ->latest()
            ->get();

        // Ganti ke view yang benar, misal: resep/kategori.blade.php
        return view('resep.kategori', [
            'reseps' => $reseps,
            'kategori' => $kategori
        ]);
    }
}
