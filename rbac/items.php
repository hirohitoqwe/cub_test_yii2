<?php

return [
    'watchUsers' => [
        'type' => 2,
    ],
    'admin' => [
        'type' => 1,
        'children' => [
            'watchUsers',
        ],
    ],
    'user' => [
        'type' => 1,
    ],
];
