<?php

declare(strict_types=1);

use Cycle\Database\Config\Postgres\TcpConnectionConfig;
use Cycle\Database\Config\PostgresDriverConfig;
use Duyler\Config\ConfigInterface;
use Duyler\ORM\DBALConfig;
use Duyler\ORM\Fixture\FixtureConfig;
use Duyler\ORM\Migration\MigrationConfig;

/**
 * @var ConfigInterface $config
 */
return [

    DBALConfig::class => [
        'default' => 'default',
        'databases' => [
            'default' => ['connection' => 'postgres']
        ],
        'connections' => [
            'postgres' => new PostgresDriverConfig(
                connection: new TcpConnectionConfig(
                    database: $config->env('DB_NAME', ''),
                    host: $config->env('DB_HOST', ''),
                    port: $config->env('DB_PORT', ''),
                    user: $config->env('DB_USER', ''),
                    password: $config->env('DB_PASS', ''),
                ),
                schema: 'public',
                queryCache: false,
            ),
        ]
    ],

    MigrationConfig::class => [
        'directory' => $config->path('migrations'),
        'table' => 'migrations',
        'safe' => false,
    ],

    FixtureConfig::class => [
        'fixtures' => [
        ],
    ],
];
