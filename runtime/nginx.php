<?php

declare(strict_types=1);

require dirname(__DIR__) . '/vendor/autoload.php';

use Duyler\Framework\ApplicationRunner;

$app = new ApplicationRunner();

$response = $app->run(ServerRequestCreator::create());

$emitter = new SapiEmitter();
$emitter->emit($response);
