<?php

declare(strict_types=1);

use Duyler\Config\ConfigInterface;
use Duyler\Builder\ApplicationLoader;

/**
 * @var ConfigInterface $config
 */
return [
    ApplicationLoader::class => [
        'packages' => [
            \Duyler\Http\Loader::class,
            \Duyler\Web\Loader::class,
            \Duyler\Aspect\Loader::class,
            \Duyler\Multiprocess\Loader::class,
            \Duyler\Database\Loader::class,
        ],
    ],
];
