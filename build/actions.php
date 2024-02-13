<?php

declare(strict_types=1);

use Duyler\Framework\Build\Action\Action;
use Duyler\Web\Build\Attribute\Route;
use Duyler\Web\Build\Attribute\View;
use Duyler\Web\Enum\Method;

Action::build(id: 'Duyler.SayHello', handler: function () {})
    ->externalAccess(true)
    ->attributes(
        new Route(
            method: Method::Get,
            pattern: '/',
        ),
        new View(
            name: 'home',
        ),
    );
