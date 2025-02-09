<?php

use Illuminate\Support\Arr;
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
            [
                'id' => 1,
                'name' => 'Alice',
                'message' => 'Hello!'
            ],
            [
                'id' => 2,
                'name' => 'Bob',
                'message' => 'Hi Shimi!'
            ],
            [
                'id' => 3,
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

Route::get('/message/{id}', function ($id) {
    $messages = [
        [
            'id' => 1,
            'name' => 'Alice',
            'message' => 'Hello!'
        ],
        [
            'id' => 2,
            'name' => 'Bob',
            'message' => 'Hi Shimi!'
        ],
        [
            'id' => 3,
            'name' => 'Charlie',
            'message' => 'Good day!'
        ]
    ];

    $message = Arr::first($messages, fn($message) => $message['id'] == $id);

    return view('message', [
        'message' => $message,
    ]);
});
