<?php

declare(strict_types=1);

use Duyler\TwigWrapper\TwigConfigDto;
use Duyler\Config\ConfigInterface;

/** @var ConfigInterface $config */
return [
    TwigConfigDto::class => [
        'pathToViews' => $config->env('PROJECT_ROOT') . 'resources/views',
        'projectRoot' => $config->env('PROJECT_ROOT'),
        'extensions' => [

        ],
    ],
];
