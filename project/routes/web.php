<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\admin\PhimController;
Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/theloai', function () {
    return view('admin/theloai');
})->name('theloai');

Route::get('/phimchoduyet', function () {
    return view('admin/phimchoduyet');
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'
])->name('home');

// Thay đổi tên route thành 'danhsachphim' và sử dụng URL chuẩn
Route::middleware('auth')->group(function () {
    Route::get('/admin/danhsachphim', [PhimController::class, 'index'])->name('danhsachphim'); 
});
