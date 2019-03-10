<?php
declare(strict_types=1);

namespace App\Contracts\URLShortener;

/**
 * Interface UrlShortenerContract
 * @package App\Contracts\URLShortener
 */
interface UrlShortenerContract
{
    /**
     * Return short url
     *
     * @param string $url
     * @return string
     */
    public function getShortUrl(string $url): string;

    /**
     * Return long url
     *
     * @param string $shortCode
     * @return string
     */
    public function getLongUrl(string $shortCode): string;
}
