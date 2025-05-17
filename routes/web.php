<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\register;
use App\Http\Controllers\login;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [login::class, 'store'])->name('login.store');

Route::get('/register', function () {
    return view('register'); // Mengarahkan ke resources/views/home.blade.php
});

Route::post('/register', [register::class, 'store'])->name('register.store');


Route::get('/pagelogin', [App\Http\Controllers\Pagelogin::class, 'index'])
    ->name('pagelogin')
    ->middleware('auth');


