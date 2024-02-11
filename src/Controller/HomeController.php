<?php

declare(strict_types=1);

namespace App\Controller;

use App\Contract\Hello;
use Duyler\Web\AbstractController;
use Psr\Http\Message\ResponseInterface;

class HomeController extends AbstractController
{
    public function __invoke(Hello $hello): ResponseInterface
    {
        return $this->render('home', ['hello' => $hello]);
    }
}
