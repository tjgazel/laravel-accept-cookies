<?php

return [
    'sessionName' => 'accept-cookies',

    'route' => [
        'middleware' => [],
        'prefix' => 'accept-cookies',
        'name' => 'accept-cookies.',
        'route' => [
            'name' => 'accept',
            'url' => '/accept'
        ]
    ],

    'backgroundColor' => 'bg-dark',
    'text' => 'We use cookies and similar technologies to offer you a better experience on our platform, improve performance, analyze your interactions on our site and personalize content. To learn more, see our Privacy Policy.',

    'linkMoreInfoUrl' => 'https://my-site.com/storage/more-info.pdf',
    'linkMoreInfoTarget' => '_blank',
    'linkMoreInfoText' => 'More info.',
    'linkMoreInfoCollor' => 'text-primary',

    'btnAcceptText' => 'Accept',
    'btnAcceptColor' => 'text-success',

    'btnRefuseText' => 'Refuse',
    'btnRefuseColor' => 'text-danger',
];
