<?php

declare(strict_types=1);

use Duyler\EventBus\Enum\ResultStatus;
use Duyler\Framework\Facade\Subscription;

Subscription::add(
    subjectId: 'Duyler.SayHello',
    actionId: 'World.SayHello',
    status: ResultStatus::Success
);
