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
     * @param int $id
     * @return mixed
     */
    public function getShortUrl(int $id);

    /**
     * Return long url
     *
     * @param string $shortCode
     * @return mixed
     */
    public function getLongUrl(string $shortCode);
}
