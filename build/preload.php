<?php

declare(strict_types=1);

use Duyler\Framework\Facade\Loader;

Loader::add(Duyler\EventBusMultiprocess\Loader::class);
Loader::add(Duyler\EventBusScenario\Loader::class);
