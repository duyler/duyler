<?php

declare(strict_types=1);

use Duyler\Config\ConfigInterface;
use Duyler\Database\DatabaseConfig;

/**
 * @var ConfigInterface $config
 */
return [
    DatabaseConfig::class => [
        'driver' => $config->env('DB_DRIVER', 'pdo_pgsql'),
        'host' => $config->env('DB_HOST', 'localhost'),
        'port' => $config->env('DB_PORT', 5432),
        'database' => $config->env('DB_NAME', 'duyler'),
        'username' => $config->env('DB_USER', 'root'),
        'password' => $config->env('DB_PASS', 'root'),
        'charset' => $config->env('DB_CHARSET', 'utf-8'),
        'entityPaths' => [$config->path( 'src/Entity')],
        'isDevMode' => true,
    ],
];
