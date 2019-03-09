<?php
declare(strict_types=1);

namespace App\Services\URLShortener;

use App\Contracts\Encryption\EncryptionContract;
use App\Contracts\URLShortener\UrlShortenerContract;
use App\Models\Link;

/**
 * Class UrlShortener
 * @package App\Services\URLShortener
 */
class UrlShortener implements UrlShortenerContract
{
    /**
     * @var EncryptionContract
     */
    private $encryption;

    /**
     * UrlShortener constructor.
     * @param EncryptionContract $encryptionContract
     */
    public function __construct(EncryptionContract $encryptionContract)
    {
        $this->encryption = $encryptionContract;
    }

    /**
     * @param int $id
     * @return string
     */
    public function getShortUrl(int $id): string
    {
        return url($this->encryption->encode((string)$id));
    }

    /**
     * @param string $shortCode
     * @return string
     */
    public function getLongUrl(string $shortCode): string
    {
        $id = $this->encryption->decode($shortCode);

        $link = Link::findOrFail($id);

        return $link->url;
    }
}