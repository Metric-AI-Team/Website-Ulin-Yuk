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
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'firebase' => [
        'api_key' => 'AIzaSyCzg31Fo5Y2QQxyQBkexDQgdYWANsh5Hkk',
        'auth_domain' => 'ulin-yuk.firebaseapp.com',
        'database_url' => 'ulin-yuk-default-rtdb.firebaseio.com',
        'project_id' => 'ulin-yuk',
        'storage_bucket' => 'ulin-yuk.appspot.com',
        'messaging_sender_id' => '120197716630',
        'app_id' => '1:120197716630:web:1c9e7cb2ebb51db2a080b7',
        'measurement_id' => 'G-WX63HK3072',
    ],

];
