# Duyler

![PHP Version](https://img.shields.io/packagist/dependency-v/duyler/duyler/php?version=dev-master)

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

**For show all available commands**

```shell
make help
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

### Create contract

```php

// src/Contract/Page.php

<?php

declare(strict_types=1);

namespace App\Contact;

readonly class Page
{
    public function __construct(
        public string $title,
        public string $content,
    ) {}
}

```

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

use Duyler\Builder\Build\Action\Action;

Action::create(id: 'Page.GetPage')
    ->handler(handler: \App\Action\GetPageAction::class)
    ->contract(\App\Contract\Page::class);

```

### Create controller

```php

// src/Controller/PageController

<?php

declare(strict_types=1);

namespace App\Controller;

use App\Contract\Page;
use Duyler\Web\Controller\BaseController;
use Psr\Http\Message\ResponseInterface;

class PageController extends BaseController
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
use Duyler\Web\Enum\HttpMethod;

Controller::build(PageController::class)
    ->actions(
        'Page.GetPage',
    )
    ->attributes(
        new Route(
            method: HttpMethod::Get,
            pattern: 'page',
        ),
    );

```

#### contract ```Page``` will be received automatically

```shell
make restart
```

Open http://localhost/page
