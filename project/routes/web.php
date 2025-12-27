<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\admin\PhimController; 
use App\Http\Controllers\admin\CategoryController; 
use App\Models\Category; 
use Illuminate\Support\Facades\View;

Route::get('/', function () {
    return view('home.index');
})->name('home');

Route::get('/admin', function () {
    return view('admin.admin');
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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');
Route::get('/category_product/{category}', [App\Http\Controllers\HomeController::class, 'category_product'])
    ->name('category_product');
Route::get('/category_product/single_product/{category}', [App\Http\Controllers\HomeController::class, 'single_product'])
    ->name('single_product'); 
Route::get('/tim-kiem', [HomeController::class, 'search'])->name('search');