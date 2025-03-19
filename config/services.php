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

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'resend' => [
        'key' => env('RESEND_KEY'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

        /*
    |--------------------------------------------------------------------------
    | My Custom Config
    |--------------------------------------------------------------------------
    */
    'firebase' => [
        'credentials' => [
            "type" => env('GAC_TYPE'),
            "project_id" => env('GAC_PROJECT_ID'),
            "private_key_id" => env('GAC_PRIVATE_KEY_ID'),
            "private_key" => env('GAC_PRIVATE_KEY'),
            "client_email" => env('GAC_CLIENT_EMAIL'),
            "client_id" => env('GAC_CLIENT_ID'),
            "auth_uri" => env('GAC_AUTH_URI'),
            "token_uri" => env('GAC_TOKEN_URI'),
            "auth_provider_x509_cert_url" => env('GAC_AUTH_PROVIDER_X509_CERT_URL'),
            "client_x509_cert_url" => env('GAC_CLIENT_X509_CERT_URL'),
        ],
    ],

];
