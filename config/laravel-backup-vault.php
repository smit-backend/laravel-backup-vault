<?php

return [
    'enabled' => env('LARAVEL_BACKUP_VAULT_ENABLED', true),
    'timeout' => env('LARAVEL_BACKUP_VAULT_TIMEOUT', 30),
    'log_channel' => env('LARAVEL_BACKUP_VAULT_LOG', 'stack'),
];
