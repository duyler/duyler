<?php

declare(strict_types=1);

namespace App\Action;

use App\Contract\Hello;

class SayHello
{
    public function __invoke(): Hello
    {
        return new Hello('Hello, World! I am Duyler!');
    }
}
