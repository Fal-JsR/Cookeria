<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResepController;
// ...existing code...

Route::get('/search-resep', [HomeController::class, 'searchResep']);
Route::get('/api/search-resep', [ResepController::class, 'apiSearch']);
// ...existing code...
