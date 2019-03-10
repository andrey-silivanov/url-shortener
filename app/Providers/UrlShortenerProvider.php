<?php
declare(strict_types=1);

namespace App\Providers;

use App\Contracts\URLShortener\UrlShortenerContract;
use App\Services\URLShortener\UrlShortener;
use Illuminate\Support\ServiceProvider;

/**
 * Class UrlShortenerProvider
 * @package App\Providers
 */
class UrlShortenerProvider extends ServiceProvider
{
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
