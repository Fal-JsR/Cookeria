<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\register;
use App\Http\Controllers\login;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\Pagelogin;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [login::class, 'store'])->name('login.store');

Route::get('/register', function () {
    return view('register'); // Mengarahkan ke resources/views/home.blade.php
});

Route::post('/register', [register::class, 'store'])->name('register.store');


Route::get('/pagelogin/{username?}', [App\Http\Controllers\Pagelogin::class, 'index'])
    ->name('pagelogin')
    ->middleware('auth');

Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('home');
})->name('logout');

Route::get('/profile/{username?}', [ProfileController::class, 'index'])
    ->middleware('auth')
    ->name('profile');

Route::get('/profile', [ResepController::class, 'index'])
    ->middleware('auth')
    ->name('profile');

Route::get('/resep/create/{id}', [ResepController::class, 'show'])
    ->middleware('auth')
    ->name('resep.show');

Route::get('/resep/create', [ResepController::class, 'create'])
    ->middleware('auth')
    ->name('resep.create');

Route::post('/resep/create/{id}', [ResepController::class, 'store'])
    ->middleware('auth')
    ->name('resep.store');

// Tambahkan ini untuk GET /resep (pencarian/list resep)
Route::get('/resep/create/{id}', [ResepController::class, 'index'])->name('resep.index');

Route::get('/resep/search', [App\Http\Controllers\ResepController::class, 'search'])->name('resep.search');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/profile/edit', [ProfileController::class, 'edit'])
    ->middleware('auth')
    ->name('profile.edit');

Route::get('/kategori/{kategori}', [ResepController::class, 'kategori'])
    ->middleware('auth')
    ->name('kategori.show');

Route::get('/koleksi', [\App\Http\Controllers\KoleksiController::class, 'index'])
    ->middleware('auth')
    ->name('koleksi.index');

Route::post('/koleksi/simpan/{id}', [\App\Http\Controllers\KoleksiController::class, 'simpan'])
    ->middleware('auth')
    ->name('koleksi.simpan');

Route::get('/api/search-resep', [ResepController::class, 'apiSearch']);
