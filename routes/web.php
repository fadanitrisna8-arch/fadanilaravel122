<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('sekolah_web.web');
});
Route::get('/s', function () {
    return view('laravel_web.profilsekolah');
});
Route::get('/b', function () {
    return view('laravel_web.beranda');
});
Route::get('/p', function () {
    return view('laravel_web.pengumuman');
});