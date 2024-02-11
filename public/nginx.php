<?php

declare(strict_types=1);

use Duyler\Framework\ApplicationRunner;

require_once dirname('__DIR__') . '/../vendor/autoload.php';

$app = new ApplicationRunner();

$response = $app->run(ServerRequestCreator::create());

$emitter = new SapiEmitter();
$emitter->emit($response);
