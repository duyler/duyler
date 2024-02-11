<?php

declare(strict_types=1);

namespace App;

use Duyler\Framework\Loader\LoaderCollection;
use Duyler\Framework\Loader\ApplicationLoaderInterface;
use Override;

class ApplicationLoader implements ApplicationLoaderInterface
{
    #[Override]
    public function packages(LoaderCollection $loaderCollection): void
    {
        $loaderCollection->add(\Duyler\Http\Loader::class);
        $loaderCollection->add(\Duyler\Web\Loader::class);
    }
}
