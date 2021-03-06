<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Remote Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default connection that will be used for SSH
    | operations. This name should correspond to a connection name below
    | in the server list. Each connection will be manually accessible.
    |
    */

    'default' => env('REMOTE_CONNECTION', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Remote Server Connections
    |--------------------------------------------------------------------------
    |
    | These are the servers that will be accessible via the SSH task runner
    | facilities of Laravel. This feature radically simplifies executing
    | tasks on your servers, such as deploying out these applications.
    |
    */

    'connections' => [
        'production' => [
            'host' => env('REMOTE_PRODUCTION_HOST', ''),
            'username' => env('REMOTE_PRODUCTION_USERNAME', ''),
            'password' => env('REMOTE_PRODUCTION_PASSWORD', ''),
            'root' => env('REMOTE_PRODUCTION_ROOT_FOLDER', '/var/www/html/pmu'),
            'key'       => '',
            'keytext'   => '',
            'keyphrase' => '',
            'agent'     => '',
            'timeout'   => 10,
            'git_branch' => env('REMOTE_PRODUCTION_GIT_BRANCH', 'master'),
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Remote Server Groups
    |--------------------------------------------------------------------------
    |
    | Here you may list connections under a single group name, which allows
    | you to easily access all of the servers at once using a short name
    | that is extremely easy to remember, such as "web" or "database".
    |
    */

    'groups' => [
        'web' => ['production'],
    ],

];
