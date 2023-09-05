<?php

declare(strict_types=1);

use Duyler\TwigWrapper\TwigConfigDto;

return [
    TwigConfigDto::class => [
        'pathToViews' => $this->projectRootDir . 'resources' . DIRECTORY_SEPARATOR . 'views',
        'projectRoot' => $this->projectRootDir,
        'extensions' => [
        ],
    ],
];
