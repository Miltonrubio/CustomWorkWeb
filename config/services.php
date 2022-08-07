<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    // 'google' => [
    //     'client_id' => env('GOOGLE_OAUTH_ID'),
    //     'client_secret' => env('GOOGLE_OAUTH_KEY'),
    //     'redirect' => '/google-callback',
    // ],
    'google' => [
        'client_id' =>
            '849467034965-rb8reoru6gaq0ku5ik73qqhe7kpaqvtv.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://127.0.0.1:8000/auth/google/callback',
    ],
];