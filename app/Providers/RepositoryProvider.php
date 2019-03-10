<?php
declare(strict_types=1);

namespace App\Providers;

use App\Contracts\Repositories\LinkRepositoryContract,
    App\Repositories\LinkRepository,
    Illuminate\Support\ServiceProvider;

/**
 * Class RepositoryProvider
 * @package App\Providers
 */
class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

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
