<?php
declare(strict_types=1);

namespace App\Providers;

use App\Contracts\URLShortener\UrlShortenerContract,
    App\Services\URLShortener\UrlShortener,
    Illuminate\Support\ServiceProvider;

/**
 * Class UrlShortenerProvider
 * @package App\Providers
 */
class UrlShortenerProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->app->bind(UrlShortenerContract::class, UrlShortener::class);
    }
}
