<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TypeController;

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
          Route::get('/user/users', 'getUser')->name('getUser');
          Route::get('/user/add-users', 'tambah')->name('tambah');
          Route::get('/user/edit/{user}', 'edit')->name('edit');
          Route::post('/user/simpan', 'saveUser')->name('saveUser');
          Route::patch('/user/update/{user}', 'updateUser')->name('updateUser');
          Route::delete('/user/hapus/{user}', 'deleteUser')->name('deleteUser');
        });
Route::controller(CustomerController::class)->name('customer.')->group(function () {
        Route::get('/customer/customers', 'getCustomer')->name('getCustomer');
        Route::get('/customer/add-customers', 'tambah')->name('tambah');
        Route::get('/customer/edit/{customer}', 'edit')->name('edit');
        Route::post('/customer/simpan', 'saveCustomer')->name('saveCustomer');
        Route::patch('/customer/update/{customer}', 'updateCustomer')->name('updateCustomer');
        Route::delete('/customer/hapus/{customer}', 'deleteCustomer')->name('deleteCustomer');
       });
Route::controller(TypeController::class)->name('type.')->group(function () {
        Route::get('/type/types', 'getType')->name('getType');
        Route::get('/type/add-types', 'tambah')->name('tambah');
        Route::get('/type/edit/{type}', 'edit')->name('edit');
        Route::post('/type/simpan', 'saveType')->name('saveType');
        Route::patch('/type/update/{type}', 'updateType')->name('updateType');
        Route::delete('/type/hapus/{type}', 'deleteType')->name('deleteType');
        });

Route::get('/login',function(){
    return view('login');
});
Route::get('/users',function(){
    return view('user.users');
});

Route::get('/index',function(){
    return view('index');
});
Route::get('/profile',function(){
    return view('profile');
});

Route::get('/laundry',function(){
    return view('laundry');
}); 

Route::get('/transaksi',function(){
    return view('transaction.transaksi');
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

