<?php
declare(strict_types=1);

namespace App\Providers;

use App\Contracts\Repositories\LinkRepositoryContract;
use App\Repositories\LinkRepository;
use Illuminate\Support\ServiceProvider;

/**
 * Class RepositoryProvider
 * @package App\Providers
 */
class RepositoryProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(LinkRepositoryContract::class, LinkRepository::class);
    }
}
