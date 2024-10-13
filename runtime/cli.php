<?php

declare(strict_types=1);

use Duyler\Builder\ApplicationBuilder;

require dirname(__DIR__) . '/vendor/autoload.php';

$busBuilder = new ApplicationBuilder();
$busBuilder->getBusBuilder()
    ->loadPackages()
    ->loadBuild()
    ->loadBuild()
    ->build();
