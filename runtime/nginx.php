<?php

declare(strict_types=1);

use Duyler\Http\ApplicationRunner;
use HttpSoft\Emitter\SapiEmitter;
use HttpSoft\ServerRequest\ServerRequestCreator;

require dirname(__DIR__) . '/vendor/autoload.php';

$app = new ApplicationRunner();

$response = $app->run(ServerRequestCreator::create());

$emitter = new SapiEmitter();
$emitter->emit($response);
