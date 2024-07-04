<?php

declare(strict_types=1);

require dirname(__DIR__) . '/vendor/autoload.php';

$busBuilder = new \Duyler\Framework\Builder();
$busBuilder->loadPackages();
$busBuilder->loadBuild();
$busBuilder->build()
    ->run();
