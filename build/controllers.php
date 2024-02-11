<?php

declare(strict_types=1);

use App\Contract\Hello;
use App\Controller\HomeController;
use Duyler\Web\Build\Attribute\Route;
use Duyler\Web\Build\Controller;
use Duyler\Web\Enum\Method;

Controller::build(HomeController::class)
    ->contracts([Hello::class])
    ->attributes(
        new Route(
            method: Method::Get,
            pattern: '/',
        ),
    );
