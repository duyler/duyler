<?php

declare(strict_types=1);

use Duyler\Framework\Facade\Action;

Action::add(
    id: 'Duyler.SayHello',
    handler: function() {
        echo ' - Hello, World! <br>';
    },
    externalAccess: true,
);

Action::add(
    id: 'World.SayHello',
    handler: function() {
        echo ' - Hi, Duyler! <br>';
    },
);
