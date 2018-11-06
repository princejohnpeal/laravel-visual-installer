<?php

use Illuminate\Validation\Rule;

return [

    /*
    |--------------------------------------------------------------------------
    | Server Requirements
    |--------------------------------------------------------------------------
    |
    | This is the default Laravel server requirements, you can add as many
    | as your application require, we check if the extension is enabled
    | by looping through the array and run "extension_loaded" on it.
    |
    */
    'core' => [
        'minPhpVersion' => '7.1.3'
    ],
    'final' => [
        'key' => true,
        'publish' => false
    ],
    'requirements' => [
        'php' => [
            'openssl',
            'pdo',
            'mbstring',
            'tokenizer',
            'JSON',
            'cURL',
        ],
        'apache' => [
            'mod_rewrite',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Folders Permissions
    |--------------------------------------------------------------------------
    |
    | This is the default Laravel folders permissions, if your application
    | requires more permissions just add them to the array list bellow.
    |
    */
    'permissions' => [
        'storage/framework/' => '775',
        'storage/logs/' => '775',
        'bootstrap/cache/' => '775'
    ],

    /*
    |--------------------------------------------------------------------------
    | Environment Form Wizard Validation Rules & Messages
    |--------------------------------------------------------------------------
    |
    | This are the default form field validation rules. Available Rules:
    | https://laravel.com/docs/5.4/validation#available-validation-rules
    |
    */
    'environment' => [
        'form' => [
            'rules' => [
                'app_name' => 'required|string|max:50',
                'environment' => 'required|string|max:50',
                'environment_custom' => 'required_if:environment,other|max:50',
                'app_debug' => [
                    'required',
                    Rule::in(['true', 'false']),
                ],
                'app_url' => 'required|url',
                'app_log_channel' => 'required|string|max:50',
                'log_slack_webhook_url' => 'required_if:app_log_channel,slack',
                'papertrail_url' => 'required_if:app_log_channel,papertrail',
                'papertrail_port' => 'required_if:app_log_channel,papertrail',
                'database_connection' => 'required|string|max:50',
                'database_hostname' => 'required|string|max:50',
                'database_port' => 'required|numeric',
                'database_name' => 'required|string|max:50',
                'database_username' => 'required|string|max:50',
                'database_password' => 'required|string|max:50',
                'broadcast_driver' => 'required|string|max:50',
                'cache_driver' => 'required|string|max:50',
                'queue_connection' => 'required|string|max:50',
                'session_driver' => 'required|string|max:50',
                'session_lifetime' => 'required|numeric',
                'redis_hostname' => 'required|string|max:50',
                'redis_password' => 'required|string|max:50',
                'redis_port' => 'required|numeric',
                'mail_driver' => 'required|string|max:50',
                'mail_host' => 'required|string|max:50',
                'mail_port' => 'required|string|max:50',
                'mail_username' => 'required|string|max:50',
                'mail_password' => 'required|string|max:50',
                'mail_encryption' => 'required|string|max:50',
                'mail_to_address' => 'nullable|email',
                'mail_from_address' => 'nullable|email',
                'mail_from_name' => 'nullable|string',
                'pusher_app_id' => 'max:50',
                'pusher_app_key' => 'max:50',
                'pusher_app_secret' => 'max:50',
                'jwt_ttl' => 'required|numeric',
                'scout_driver' => 'required|string',
                'algolia_app_id' => 'required_if:scout_driver,algolia',
                'algolia_secret' => 'required_if:scout_driver,algolia',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Installed Middleware Options
    |--------------------------------------------------------------------------
    | Different available status switch configuration for the
    | canInstall middleware located in `canInstall.php`.
    |
    */
    'installed' => [
        'redirectOptions' => [
            'route' => [
                'name' => 'welcome',
                'data' => [],
            ],
            'abort' => [
                'type' => '404',
            ],
            'dump' => [
                'data' => 'Dumping a not found message.',
            ]
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Selected Installed Middleware Option
    |--------------------------------------------------------------------------
    | The selected option fo what happens when an installer instance has been
    | Default output is to `/resources/views/error/404.blade.php` if none.
    | The available middleware options include:
    | route, abort, dump, 404, default, ''
    |
    */
    'installedAlreadyAction' => '',

    /*
    |--------------------------------------------------------------------------
    | Updater Enabled
    |--------------------------------------------------------------------------
    | Can the application run the '/update' route with the migrations.
    | The default option is set to False if none is present.
    | Boolean value
    |
    */
    'updaterEnabled' => 'true',

];
