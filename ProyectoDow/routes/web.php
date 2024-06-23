<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BebidasController;
//Route::get('/', function () {
//    return view('welcome');
//})

// routes/web.php



Route::get('/home', [HomeController::class, 'index'])->middleware('auth');
Route::get('/login',[HomeController::class,'login'])->name('home.login');
Route::get('/admin/dashboard', function () {})->middleware(['auth', 'admin']);
    // La logica para el panel de admin


Route::get('admin/menus', 'AdminController@index')->middleware('admin')->name('admin.menus');

Route::middleware(['auth', 'admin'])->group(function () { Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
