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

    'stripe' => [

        'secret' => env('STRIPE_SECRET'),

   ],

   'google' => [
    'client_id' => '871938761866-t57sb63h513uj9qjesrn4b5l5ejsejmp.apps.googleusercontent.com',
    'client_secret' => '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',
    'redirect' => 'https://www.aris360.com/user/dashboard/auth/google/callback',
],
    'facebook' => [
        'client_id' => '2216605961858401',
        'client_secret' => '8b57b8612f00aa2c28c377c2d9e66623',
        'redirect' =>  'https://www.aris360.com/user/dashboard/auth/facebook/callback',
],

];

