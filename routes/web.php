<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/write', function () {
    return view('write');
});

Route::get('/browse', function () {
    return view('browse', [
        'messages' => [
            ['name' => 'Alice', 'message' => 'Hello!'],
            ['name' => 'Bob', 'message' => 'Hi Shimi!'],
            [
                'name' => 'Charlie',
                'message' => 'Good day!'
            ]
        ],
    ]);
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/support', function () {
    return view('support');
});
