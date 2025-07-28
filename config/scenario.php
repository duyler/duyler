<?php

declare(strict_types=1);

use Duyler\Config\ConfigInterface;
use Duyler\Scenario\ScenarioConfig;

/**
 * @var ConfigInterface $config
 */
return [
    ScenarioConfig::class => [
        'path' => $config->path('scenarios'),
    ],
];
