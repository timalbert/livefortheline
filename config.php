<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Live for the Line',
    'description' => '',
    'collections' => [
        'tim' => [
            'path' => function ($page) {
                return 'tim/' . Str::slug($page->title);
            },
        ],
        'updates' => [
            'path' => function ($page) {
                return 'updates/' . Str::slug($page->title);
            },
        ],
        'devos' => [
            'path' => function ($page) {
                return 'devos/' . $page->count . '/' . Str::slug($page->title);
            },
        ]
    ],
];
