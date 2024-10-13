<?php

declare(strict_types=1);

use Duyler\Builder\ApplicationBuilder;

require dirname(__DIR__) . '/vendor/autoload.php';

$busBuilder = new ApplicationBuilder();
$bus = $busBuilder->getBusBuilder()
    ->loadPackages()
    ->loadBuild()
    ->build();

try {
    $bus->run();
} catch (Throwable $exception) {
    $bus->reset();
    $busBuilder->getContainer()->finalize();
    echo $exception->getMessage();
}
