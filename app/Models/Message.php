<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Message
{
    public static function all(): array
    {
        return [
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
    }

    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn($message) => $message['id'] === $id);

        if (!$job) {
            abort(404);
        }

        return $job;
    }
}
