<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Live for the Line',
    'description' => 'Tim\'s journey through brain cancer
    ',
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
        'trips' => [
            'path' => function ($page) {
                return 'trips/' . Str::slug($page->title);
            },
        ],
        'ebeneezer' => [
            'path' => function ($page) {
                return 'ebeneezer/' . Str::slug($page->title);
            },
        ]
    ],
];
