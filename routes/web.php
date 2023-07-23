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

Route::get('/login',function(){
    return view('login');
});
Route::get('/index',function(){
    return view('index');
});
Route::get('/profile',function(){
    return view('profile');
});
Route::get('/add-customer',function(){
    return view('add-customer');
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
