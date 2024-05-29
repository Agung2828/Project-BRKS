<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DataPelanggan;
use App\Http\Controllers\DataAplikasi;
use App\Http\Controllers\DataPengguna;
use App\Http\Controllers\DataUser;
use App\Http\Controllers\UproleController;
use App\Http\Controllers\UserControlController;
use App\Models\datapelanggan as ModelsDatapelanggan;

Route::middleware(['guest'])->group(function () {
    Route::view('/', 'halaman_depan.index');
    Route::get('/sesi', [AuthController::class, 'index'])->name('auth');
    Route::post('/sesi', [AuthController::class, 'login'])->name('login');
    Route::get('/reg', [AuthController::class, 'create'])->name('registrasi');
    Route::post('/reg', [AuthController::class, 'register'])->name('registrasi.store');
});

Route::middleware(['auth'])->group(function () {
    Route::redirect('/home', '/user');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('userAkses:admin');
    Route::get('/user', [UserController::class, 'index'])->name('user')->middleware('userAkses:user');

    // Route::get('/verify/{verify_key}', [AuthController::class, 'verify']);

    Route::get('/datapengguna', [DataPengguna::class, 'index'])->name('datapengguna')->middleware('userAkses:admin');
    Route::get('/datapengguna/brktambah', [DataPengguna::class, 'tambah']);
    Route::post('/datapengguna/brktambah', [DataPengguna::class, 'create']);
    Route::get('/datapengguna/brkedit/{id}', [DataPengguna::class, 'edit']);
    Route::post('/datapengguna/brkedit', [DataPengguna::class, 'change']);
    Route::post('/datapengguna/brkhapus/{id}', [DataPengguna::class,  'hapus']);
    Route::post('/datapengguna/cetak', [DataPengguna::class, 'cetak'])->name('cetak');
    Route::get('/datapengguna/modal', [DataPengguna::class, 'modal'])->name('modal');

    Route::get('/datapelanggan', [DataPelanggan::class, 'index'])->name('datapelanggan')->middleware('userAkses:user');;
    Route::get('/datapelanggan/brktambah', [DataPelanggan::class, 'tambah']);
    Route::post('/datapelanggan/brktambah', [DataPelanggan::class, 'create']);
    Route::get('/datapelanggan/brkedit/{id}', [DataPelanggan::class, 'edit']);
    Route::post('/datapelanggan/brkedit', [DataPelanggan::class, 'change']);
    Route::post('/datapelanggan/brkhapus/{id}', [DataPelanggan::class,  'hapus']);

    Route::get('/dataaplikasi', [DataAplikasi::class, 'index'])->name('dataaplikasi')->middleware('userAkses:admin');
    Route::get('/dataaplikasi/brktambah', [DataAplikasi::class, 'tambah']);
    Route::post('/dataaplikasi/brktambah', [DataAplikasi::class, 'create']);
    Route::get('/dataaplikasi/brkedit/{id}', [DataAplikasi::class, 'edit']);
    Route::post('/dataaplikasi/brkedit', [DataAplikasi::class, 'change']);
    Route::post('/dataaplikasi/brkhapus/{id}', [DataAplikasi::class,  'hapus']);

    Route::post('/upgrade-role/{id}', [UserControlController::class, 'upgradeRole'])->name('upgrade.role');
    Route::post('/downgrade-role/{id}', [UserControlController::class, 'downgradeRole'])->name('downgrade.role');
    Route::get('/usercontrol', [UserControlController::class, 'index'])->name('usercontrol')->middleware('userAkses:admin');
    Route::get('/usercontrol/brktambah', [UserControlController::class, 'tambah'])->name('usercontrol.tambah');
    Route::post('/usercontrol/brktambah', [UserControlController::class, 'create'])->name('usercontrol.create');
    Route::get('/usercontrol/brkedit/{id}', [UserControlController::class, 'edit'])->name('usercontrol.edit');
    Route::post('/usercontrol/brkedit/{id}', [UserControlController::class, 'change'])->name('usercontrol.update');
    Route::post('/usercontrol/brkhapus/{id}', [UserControlController::class, 'hapus'])->name('usercontrol.hapus');



    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/usercontrol', [UserControlController::class, 'index'])->name('usercontrol');

    // new
    Route::post('/brktambah/{id}', [DataPengguna::class, 'create']);
    Route::post('/brkedit/{id}', [DataPengguna::class, 'change']);
    Route::post('/brktambah/{id}', [Datapelanggan::class, 'create']);
    Route::post('/brkedit/{id}', [Datapelanggan::class, 'change']);

    // Route::post('/upgrade-role/{id}', [UserControlController::class, 'upgradeRole'])->name('upgrade.role');
    // Route::post('/downgrade-role/{id}', [UserControlController::class, 'downgradeRole'])->name('downgrade.role');
    Route::get('/tambahuc', [UserControlController::class, 'tambah']);
    // Route::get('/edituc/{id}', [UserControlController::class, 'edit']);
    Route::post('/hapusuc/{id}', [UserControlController::class, 'hapus']);
    Route::post('/tambahuc', [UserControlController::class, 'create']);
    // Route::post('/edituc', [UserControlController::class, 'change']);

    Route::post('/uprole/{id}', [UproleController::class, 'index']);
});
