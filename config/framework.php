<?php

declare(strict_types=1);

use Duyler\Config\FileConfig;
use Duyler\Framework\ApplicationLoader;

/**
 * @var FileConfig $config
 */
return [
    ApplicationLoader::class => [
        'packages' => [
            \Duyler\Http\Loader::class,
            \Duyler\Web\Loader::class,
            \Duyler\Aspect\Loader::class,
            \Duyler\Multiprocess\Loader::class,
        ],
    ],
];
