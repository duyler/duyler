<?php

declare(strict_types=1);

use Duyler\TwigWrapper\TwigConfig;
use Duyler\Config\ConfigInterface;

/**
 * @var ConfigInterface $config
 */
return [
    TwigConfig::class => [
        'pathToViews' => $config->path('resources/views'),
        'extensions' => [

        ],
    ],
];
