<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/admin', function () {
    return view('admin');
})->name('admin');
Route::get('/admin/quanlyphim', function () {
    return view('admin/quanlyphim/danhsachphim');
})->name('danhsachphim');
Route::get('/admin/theloai', function () {
    return view('admin/quanlyphim/theloai');
})->name('theloai');
Route::get('/admin/phimchoduyet', function () {
    return view('admin/quanlyreview/phimchoduyet');
})->name('phimchoduyet');
Route::get('/home/hanhdong', function () {
    return view('home/theloai/hanhdong');
})->name('hanhdong');
Route::get('/home/kinhdi', function () {
    return view('home/theloai/kinhdi');
})->name('kinhdi');
Route::get('/home/tintuc', function () {
    return view('home/tintuc');
})->name('tintuc');
?>