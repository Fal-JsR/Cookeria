<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Resep;

class ResepController extends Controller
{
    public function show($id_resep)
    {
        $resep = Resep::findOrFail($id_resep);
        return view('resep.show', compact('resep'));
    }

    public function create()
    {
        return view('resep.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required', // gunakan kategori jika field di database adalah kategori
            'bahan' => 'required',
            'cara' => 'required',
            'gambar' => 'nullable|image'
        ]);

        $path = null;
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('reseps', 'public');
        }

        Resep::create([
            'user_id' => Auth::id(),
            'nama' => $request->nama,
            'kategori' => $request->kategori, // pastikan field ini diisi
            'bahan' => $request->bahan,
            'cara' => $request->cara,
            'gambar' => $path
        ]);

        return redirect()->route('profile', ['username' => Auth::user()->username])->with('success', 'Resep berhasil dibuat!');
    }

    // Tambahkan/ubah method index untuk handle pencarian GET dari form
    public function index(Request $request)
    {
        $nama = $request->input('nama');
        $reseps = Resep::with('user')
            ->when($nama, function($query, $nama) {
                return $query->where('nama', 'like', "%$nama%");
            })
            ->get();

        return view('resep.index', compact('reseps', 'nama'));
    }

    public function kategori($kategori)
    {
        $reseps = Resep::with('user')
            ->where('kategori', $kategori)
            ->get();

        return view('resep.kategori', compact('reseps', 'kategori'));
    }

    public function search(Request $request)
    {
        $query = $request->input('q');
        $reseps = Resep::with('user')
            ->where('nama', 'like', '%' . $query . '%')
            ->orWhere('kategori', 'like', '%' . $query . '%')
            ->get();

        return view('resep.search', compact('reseps', 'query'));
    }

    // API untuk live search resep (JSON)
    public function apiSearch(Request $request)
    {
        try {
            $nama = $request->input('nama');
            $reseps = Resep::select('id_resep', 'nama')
                ->when($nama, function($query, $nama) {
                    return $query->where('nama', 'like', "%$nama%");
                })
                ->limit(10)
                ->get();

            return response()->json($reseps);
        } catch (\Exception $e) {
            \Log::error('API Search Error: '.$e->getMessage());
            return response()->json(['error' => 'Server error'], 500);
        }
    }
}
