<?php

declare(strict_types=1);

use App\Action\SayHello;
use App\Contract\Hello;
use Duyler\Framework\Build\Action\Action;

Action::build(id: 'Duyler.SayHello', handler: SayHello::class)
    ->contract(Hello::class)
    ->externalAccess(true);
