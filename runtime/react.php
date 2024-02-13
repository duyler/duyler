<?php

declare(strict_types=1);

use Duyler\Http\ApplicationRunner;

require dirname(__DIR__) . '/vendor/autoload.php';

$app = new ApplicationRunner();

$http = new React\Http\HttpServer(function (Psr\Http\Message\ServerRequestInterface $request) use ($app) {
    try {
        return $app->run($request);
    } catch (Throwable $e) {
        echo (string) $e;
        throw $e;
    }
});

$socket = new React\Socket\SocketServer('0.0.0.0:80');
$http->listen($socket);
