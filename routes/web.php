<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;



//login
Route::get('/',[MainController::class,'login'])->name('loginkuy');
Route::post('/postlogin',[MainController::class, 'postlogin'])->name('postloginkuy');

//register
Route::get('/register',[MainController::class, 'register'])->name('registerkuy');
Route::post('/postregister',[MainController::class, 'postregister'])->name('postregisterkuy');

Route::middleware('auth')->group( function(){ 
    //daftar
    Route::get('/daftar',[MainController::class, 'daftar'])->name('daftarkuy');
    Route::post('/postdaftar',[MainController::class, 'postdaftar'])->name('postdaftarkuy');

    //Tampilan jika udah daftar
    Route::get('/welcome',[MainController::class, 'welcome'])->name('welcomekuy');

    //dashboard admin
    Route::get('/dashboard',[MainController::class, 'dashboard'])->name('dashboardkuy');

    //data
    Route::get('/data',[MainController::class, 'data'])->name('datakuy');

    //pembayaran
    Route::get('/pilihfakultas',[MainController::class,'pilihfakultas'])->name('pilihfakultaskuy');
    Route::get('/pembayaran/{programstudi}',[MainController::class, 'pembayaran'])->name('pembayarankuy');
    Route::post('/postpembayaran',[MainController::class, 'postpembayaran'])->name('postpembayarankuy');
    

    //Admin Pembayaran
    Route::get('/adminpembayaran',[MainController::class,'adminpembayaran'])->name('adminpembayarankuy');
    Route::get('/editpembayaran{pembayaran}',[MainController::class,'editpembayaran'])->name('editpembayarankuy');
    Route::post('/posteditpembayaran{datapembayaran}',[MainController::class,'posteditpembayaran'])->name('posteditpembayarankuy');

    //laporan
    Route::get('/adminlaporan',[MainController::class, 'adminlaporan'])->name('adminlaporankuy');

    //logout
    Route::get('/logout',[MainController::class, 'logout'])->name('logoutkuy');
});
