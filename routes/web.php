<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(UserController::class)->name('user.')->group(function () {
          Route::get('/user/view', 'getUser')->name('getUser');
          Route::get('/user/add-users', 'tambah')->name('tambah');
     });
Route::get('/login',function(){
    return view('login');
});
Route::get('/users',function(){
    return view('users');
});
Route::get('/add-users',function(){
    return view('add-users');
});
Route::get('/index',function(){
    return view('index');
});
Route::get('/profile',function(){
    return view('profile');
});
Route::get('/customer',function(){
    return view('customer');
});
Route::get('/transaksi',function(){
    return view('transaksi');
});
Route::get('/pengeluaran',function(){
    return view('pengeluaran');
});
Route::get('/laporan',function(){
    return view('laporan');
});
Route::get('/add-customer',function(){
    return view('add-customer');
});
Route::get('/edit-customer',function(){
    return view('edit-customer');
});
Route::get('/add-transaksi',function(){
    return view('add-transaksi');
});
Route::get('/edit-transaksi',function(){
    return view('edit-transaksi');
});
Route::get('/add-pengeluaran',function(){
    return view('add-pengeluaran');
});
Route::get('/edit-pengeluaran',function(){
    return view('edit-pengeluaran');
});

