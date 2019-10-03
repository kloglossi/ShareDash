<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/form', function () {
    return view('template/form');
})->name('form');

Route::get('/table', function () {
    return view('template/tables');
})->name('table');

Route::get('/user', function () {
    return view('template/user');
})->name('user');

Route::get('/blog', function () {
    return view('template/blog');
})->name('blog');