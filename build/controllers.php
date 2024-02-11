<?php

declare(strict_types=1);

use App\Controller\HomeController;
use Duyler\Web\Build\Attribute\Route;
use Duyler\Web\Build\Controller;
use Duyler\Web\Enum\Method;

Controller::build(HomeController::class)
    ->attributes(
        new Route(
            method: Method::Get,
            pattern: '/',
        ),
    );
