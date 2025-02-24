<?php

return [
    'allowedCommands' => [
        'auth:clear-resets',
        'cache:clear',
        'winter:update',
        'queue:flush',
        'queue:forget',
        'queue:restart',
        'queue:retry',
        'queue:work',
        'route:clear',
        'schedule:run',
        'view:clear',
    ],

    'allowedPluginCommands' => [
        'plugin:refresh',
    ],
];
