<?php

declare(strict_types=1);

use App\ApplicationLoader;
use Duyler\Framework\Loader\ApplicationLoaderInterface;
use Duyler\Config\FileConfig;

/**
 * @var FileConfig $config
 */
return [
    ApplicationLoaderInterface::class => ApplicationLoader::class,
];
