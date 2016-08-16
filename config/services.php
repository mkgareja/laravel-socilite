<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
        'client_id' => '1182752345089360',
        'client_secret' => '19e42ecd334cd26e473d4dd4553d1986',
        'redirect' => 'http://localhost:8000/callback',
    ],
    'google' => [
        'client_id' => '162660396554-motlrnkqc2vs5f55t38jp70nfm16gk17.apps.googleusercontent.com',
        'client_secret' => 'vHuN_0qdllhUBgGfCzYBHbai',
        'redirect' => 'http://localhost:8000/google/callback',
    ],

];
