<?php

declare(strict_types=1);

use Duyler\Router\Route;

Route::get('duyler/hello')
    ->scenario('Duyler.SayHello')
    ->match();
