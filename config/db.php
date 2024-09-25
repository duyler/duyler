<?php

declare(strict_types=1);

use Duyler\Config\ConfigInterface;
use Duyler\Database\DatabaseConfig;

/**
 * @var ConfigInterface $config
 */
return [
    DatabaseConfig::class => [
        'driver' => 'pdo_pgsql',
        'host' => '',
        'port' => 5432,
        'database' => '',
        'username' => '',
        'password' => '',
        'charset' => 'utf-8',
        'entityPaths' => [$config->path( 'src/Entity')],
        'isDevMode' => true,
    ],
];
