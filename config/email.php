<?php

return [

    'default' => env('Email.DEFAULT_SENDER', 'default'),

    'senders' => [

        'default' => [

            'service' => 'smtp',
            'host' => env('Email.DEFAULT_MAIL_HOST', ''),
            'port' => env('Email.DEFAULT_MAIL_PORT', 465),
            'username' => env('Email.DEFAULT_MAIL_Username', ''),
            'password' => env('Email.DEFAULT_MAIL_Password', ''),
            'encryption' => 'smtps',

        ],

    ],

];