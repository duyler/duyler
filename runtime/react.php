<?php

declare(strict_types=1);

use Duyler\Http\RuntimeFactory;
use Duyler\Http\RuntimeType;

require dirname(__DIR__) . '/vendor/autoload.php';

$runtime = RuntimeFactory::create(RuntimeType::ReactPHP);
$runtime->run();
