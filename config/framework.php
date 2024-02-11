<?php

declare(strict_types=1);

use Duyler\Config\FileConfig;

/**
 * @var FileConfig $config
 */
return [
    ApplicationLoader::class => [
        'packages' => [
            \Duyler\Http\Loader::class,
            \Duyler\Web\Loader::class
        ],
    ],
];
