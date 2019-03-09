<?php
declare(strict_types=1);

namespace App\Providers;

use App\Contracts\Encryption\EncryptionContract,
    App\Services\Encryption\Encryption,
    Illuminate\Support\ServiceProvider;

/**
 * Class EncryptionProvider
 * @package App\Providers
 */
class EncryptionProvider extends ServiceProvider
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
        $this->app->bind(EncryptionContract::class, Encryption::class);
    }
}
