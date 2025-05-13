<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin');

Route::get('/admin/about', function () {
    return view('admin.about');
})->name('adminAbout');