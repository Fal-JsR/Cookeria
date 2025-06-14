<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resep;

class HomeController extends Controller
{
    public function index()
    {
        $reseps = Resep::latest()->take(9)->get(); // ambil 9 resep terbaru
        return view('home', compact('reseps'));
    }

    public function searchResep(Request $request)
    {
        $nama = $request->query('nama');
        $reseps = Resep::where('nama', 'like', '%' . $nama . '%')
            ->select('id', 'nama', 'slug')
            ->take(10)
            ->get();

        return response()->json($reseps);
    }
}
