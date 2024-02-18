# Duyler
### Event-driven architecture framework

### Get started

#### Install with included docker config and without host php interpreter

```shell
curl -L -O https://github.com/duyler/duyler/archive/refs/heads/master.zip
```
```shell
unzip master.zip -d duyler
```
```shell
cd duyler
```
```shell
make build
```
```shell
make up
```

#### Install using local composer

```shell
composer create-project duyler/duyler
```
```shell
cd duyler
```
```shell
make up
```
Open http://localhost/

### Create action

```php

// src/Action/GetPageAction.php

<?php

declare(strict_types=1);

namespace App\Action;

use App\Contract\Page;

class GetPageAction
{
    public function __invoke(): Page
    {
        return new Page(
            title: 'Home',
            content: 'Hello, World!',
        );
    }
}

```

```php

// build/actions.php

<?php

declare(strict_types=1);

use Duyler\Framework\Build\Action\Action;

Action::build(id: 'Page.GetPage', handler: \App\Action\GetPageAction::class)
    ->externalAccess(true)
    ->contract(\App\Contract\Page::class);

```

### Create controller

```php

// src/Controller/PageController

<?php

declare(strict_types=1);

namespace App\Controller;

use App\Contract\Page;
use Duyler\Web\AbstractController;
use Psr\Http\Message\ResponseInterface;

class PageController extends AbstractController
{
    public function __invoke(Page $page): ResponseInterface
    {
        return $this->json($page);
    }
}

```

```php

// build/controllers.php

<?php

declare(strict_types=1);

use App\Controller\PageController;
use App\Contract\Page;
use Duyler\Web\Build\Attribute\Route;
use Duyler\Web\Build\Controller;
use Duyler\Web\Enum\Method;

Controller::build(PageController::class)
    ->contracts([Page::class])
    ->attributes(
        new Route(
            method: Method::Get,
            pattern: 'page',
        ),
    );

```

#### contract ```Page``` will be received automatically

```shell
make rebuild
```

Open http://localhost/page
