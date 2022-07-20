<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Live for the Line',
    'description' => '',
    'collections' => [
        'articles' => [
            'path' => function ($page) {
                return 'articles/' . Str::slug($page->title);
            },
        ]
    ],
];
