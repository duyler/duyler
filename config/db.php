<?php

declare(strict_types=1);

use Duyler\Config\ConfigInterface;
use Duyler\Database\DatabaseConfig;

/**
 * @var ConfigInterface $config
 */
return [
    DatabaseConfig::class => [
        'driver' => $config->env('DB_DRIVER'),
        'host' => $config->env('DB_HOST'),
        'port' => $config->env('DB_PORT'),
        'database' => $config->env('DB_NAME'),
        'username' => $config->env('DB_USER'),
        'password' => $config->env('DB_PASS'),
        'charset' => $config->env('DB_CHARSET'),
        'entityPaths' => [$config->path( 'src/Entity')],
        'isDevMode' => true,
    ],
];
