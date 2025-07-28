<?php

declare(strict_types=1);

use Duyler\Config\ConfigInterface;
use Duyler\Builder\Build\Action\Action;
use Duyler\Web\Build\Attribute\Route;
use Duyler\Web\Build\Attribute\View;
use Duyler\Web\Enum\HttpMethod;

/**
 * @var ConfigInterface $config
 */

Action::declare()
    ->attributes(
        new Route(
            method:HttpMethod::Get,
            pattern: '/',
        ),
        new View(
            name: 'home',
        ),
    );
