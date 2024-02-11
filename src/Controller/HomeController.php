<?php

declare(strict_types=1);

namespace App\Controller;

use Duyler\Web\AbstractController;
use Psr\Http\Message\ResponseInterface;

class HomeController extends AbstractController
{
    public function __invoke(): ResponseInterface
    {
        return $this->render('hello', ['hello' => 'Hello, World']);
    }
}
