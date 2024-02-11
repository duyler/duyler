<?php

declare(strict_types=1);

use App\Controller\HomeController;
use Duyler\Web\Build\Attribute\Route;
use Duyler\Web\Build\Controller;

Controller::build(HomeController::class)
    ->attributes(
        new Route(
            method: 'get',
            pattern: '/',
        ),
    );
