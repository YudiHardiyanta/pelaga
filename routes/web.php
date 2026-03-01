<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PermohonanController;


Route::get('/', function () {
    return view('home');
});

Route::get('/visi-misi', function () { return view('useri.visi'); });
Route::get('/sto', function () { return view('useri.sto'); });
Route::get('/bpd', function () { return view('useri.bpd'); });
Route::get('/pkk', function () { return view('useri.pkk'); });
Route::get('/taruna', function () { return view('useri.taruna'); });
Route::get('/linmas', function () { return view('useri.linmas'); });
Route::get('/pengaduan', [PengaduanController::class, 'add'])->name('pengaduan.add');
Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan');

Route::get('/masuk', function () {
    return view('login');
});

//Route::get('/dashboard', function () {
 //   return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/user', function () {return view('dashboard'); })->name('user.dashboard');
    Route::get('/permohonan', [PermohonanController::class, 'create'])->name('create');

    Route::get('/admin', function () { return view('admini.dashboard'); })->middleware('admin')->name('admini.dashboard');

    Route::get('/calendar', function () { return view('admini.calendar'); })->middleware('admin')->name('admini.calendar');
    Route::get('/tambahberita', [BeritaController::class, 'add'])->name('add');
    Route::get('/berita', [BeritaController::class, 'index'])->name('berita.data');
    Route::post('/berita', [BeritaController::class, 'store'])->name('berita');;
    Route::get('/berita/edit{}', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::patch('/berita', [BeritaController::class, 'editproses']);
});

use Illuminate\Support\Facades\Hash;
Route::get('/create_hash', function () {
    $password = '5103021812180001';
    $hashedPassword = Hash::make($password);
    return $hashedPassword;
}); 

require __DIR__.'/auth.php';
