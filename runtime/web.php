<?php

declare(strict_types=1);

use Duyler\Http\Runtime;

require dirname(__DIR__) . '/vendor/autoload.php';

$runtime = new Runtime();
$runtime->run();
