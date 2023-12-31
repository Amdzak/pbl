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

Route::get('/admin', function () {
    return view('dashboard.index',[
        "judul" => "Dashboard Admin"
    ]);
});

Route::get('/admin/kamar',function(){
    return view('kamar',[
        "judul" => "Data Kamar"
    ]);
});

Route::get("/admin/login",function(){
    return view("dashboard.login",[
        "judul" => "Admin Login"
    ]);
});
