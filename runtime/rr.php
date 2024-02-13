<?php

declare(strict_types=1);

use Duyler\Http\ApplicationRunner;
use Nyholm\Psr7\Response;
use Nyholm\Psr7\Factory\Psr17Factory;
use Spiral\RoadRunner\Worker;
use Spiral\RoadRunner\Http\PSR7Worker;

require dirname(__DIR__) . '/vendor/autoload.php';

$worker = Worker::create();
$factory = new Psr17Factory();

$psrWorker = new PSR7Worker($worker, $factory, $factory, $factory);
$runner = new ApplicationRunner();

while ($request = $psrWorker->waitRequest()) {
    try {
        $response = $runner->run($request);

        $psrWorker->respond($response);
    } catch (Throwable $exception) {
        $psrWorker->respond(new Response(500, [], $exception->getMessage()));
        $psrWorker->getWorker()->error((string) $exception);
    }
}
