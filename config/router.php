<?php

declare(strict_types=1);

use Duyler\Router\RouterConfig;

return [
    RouterConfig::class => [
        'languages' => [],
        'routesDirPath' => $this->projectRootDir . 'routes/',
        'routesAliases' => [],
    ],
];
