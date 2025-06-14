<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resep;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class Pagelogin extends Controller
{
    public function index(Request $request)
    {
        $reseps = null;
        if ($request->has('kategori')) {
            $reseps = Resep::where('user_id', Auth::id())
                ->where('kategori', $request->kategori)
                ->latest()
                ->get();
        }
        return view('pagelogin', compact('reseps'));
    }
}
