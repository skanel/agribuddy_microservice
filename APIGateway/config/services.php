<?php

return [
    'authors' => [
        'base_uri' => env('AUTHORS_SERVICE_BASE_URL'),
        'secret' => env('AUTHORS_SERVICE_SECRET'),
    ],

    'books' => [
        'base_uri' => env('BOOKS_SERVICE_BASE_URL'),
        'secret' => env('BOOKS_SERVICE_SECRET'),
    ],

    'credits' => [
        'base_uri' => env('CREDITS_SERVICE_BASE_URL'),
        'secret' => env('CREDITS_SERVICE_SECRET'),
    ],
];
