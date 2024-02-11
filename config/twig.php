<?php

declare(strict_types=1);

use Duyler\TwigWrapper\Extensions\PhpSyntaxHighlightExtension;
use Duyler\TwigWrapper\TwigConfigDto;
use Duyler\Config\FileConfig;

/** @var FileConfig $config */
return [
    TwigConfigDto::class => [
        'pathToViews' => $config->env('PROJECT_ROOT') . 'resources' . DIRECTORY_SEPARATOR . 'views',
        'projectRoot' => $config->env('PROJECT_ROOT'),
        'extensions' => [
            PhpSyntaxHighlightExtension::class,
        ],
    ],
];
