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
        'domain' => 'sandbox3406491dc8374fa49409ecd4fb7dd2fe.mailgun.org',
        'secret' => 'key-1896958139b1847f54719e2e97fcffa3',
    ],

    'mandrill' => [
        'secret' => '',
    ],

    'ses' => [
        'key'    => '',
        'secret' => '',
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => NensdeLlum\User::class,
        'key'    => '',
        'secret' => '',
    ],

];
