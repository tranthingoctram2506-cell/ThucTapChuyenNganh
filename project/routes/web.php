<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; 

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/quanlyphim', function () {
    return view('admin/quanlyphim/danhsachphim');
})->name('danhsachphim');

Route::get('/theloai', function () {
    return view('admin/quanlyphim/theloai');
})->name('theloai');

Route::get('/phimchoduyet', function () {
    return view('admin/quanlyreview/phimchoduyet');
})->name('phimchoduyet');

Route::get('/hanhdong', function () {
    return view('home/theloai/hanhdong');
})->name('hanhdong');

Route::get('/kinhdi', function () {
    return view('home/theloai/kinhdi');
})->name('kinhdi');

Route::get('/tintuc', function () {
    return view('home/tintuc');
})->name('tintuc');

Route::get('logout',[HomeController::class,'logout'
])->name('logout');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');