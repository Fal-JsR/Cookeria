<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagelogin extends Controller
{
     public function index()
    {
        return view('pagelogin'); // Menampilkan view "home.blade.php"
    }
}
