<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/write', function () {
    return view('write');
});

Route::get('/browse', function () {
    return view('browse');
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/support', function () {
    return view('support');
});
