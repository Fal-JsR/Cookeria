<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Resep;
use App\Models\Koleksi;

class KoleksiController extends Controller
{
    public function simpan($id_resep)
    {
        $resep = Resep::findOrFail($id_resep);

        // Cek apakah sudah ada di koleksi user
        $exists = Koleksi::where('id_user', Auth::id())
            ->where('id_resep', $resep->id_resep)
            ->exists();

        if (!$exists) {
            Koleksi::create([
                'id_user' => Auth::id(),
                'id_resep' => $resep->id_resep,
            ]);
        }

        return redirect()->back()->with('success', 'Resep berhasil disimpan ke koleksi!');
    }

    public function index()
    {
        $koleksis = Koleksi::with(['resep.user'])
            ->where('id_user', Auth::id())
            ->get();
        return view('resep.koleksi', compact('koleksis'));
    }
}
