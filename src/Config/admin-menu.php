<?php

return [
    [
        'key' => 'newsletter',
        'name' => 'Newsletter',
        'route' => 'admin.newsletter.index',
        'sort' => 100,
        'icon' => 'icon-email', // you can use 'icon-newsletter' or custom SVG too
    ],
    [
        'key' => 'newsletter.compose',
        'name' => 'Send Newsletter',
        'route' => 'admin.newsletter.compose',
        'sort' => 101,
        'icon' => 'icon-send',
    ]
];
