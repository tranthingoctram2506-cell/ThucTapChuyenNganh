<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\admin\PhimController; 
use App\Http\Controllers\admin\CategoryController; 

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::group(['prefix'=> 'admin','as'=> 'admin.'],function() {

    Route::resource('product', PhimController::class);

    Route::resource('category', CategoryController::class);

    Route::get('/phimchoduyet', function () {
        return view('admin.phimchoduyet');
    })->name('phimchoduyet');
});

Route::get('/hanhdong', function () {
    return view('home.theloai.hanhdong');
})->name('hanhdong');

Route::get('/kinhdi', function () {
    return view('home.theloai.kinhdi');
})->name('kinhdi');

Route::get('/tintuc', function () {
    return view('home.tintuc');
})->name('tintuc');
Auth::routes(); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->middleware('auth')
    ->name('home');