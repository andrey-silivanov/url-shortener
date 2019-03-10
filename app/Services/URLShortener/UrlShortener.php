<?php
declare(strict_types=1);

namespace App\Services\URLShortener;

use App\Contracts\Encryption\EncryptionContract;
use App\Contracts\Repositories\LinkRepositoryContract;
use App\Contracts\URLShortener\UrlShortenerContract;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
     * @var LinkRepositoryContract
     */
    private $linkRepository;

    /**
     * UrlShortener constructor
     *
     * @param EncryptionContract $encryptionContract
     * @param LinkRepositoryContract $linkRepository
     */
    public function __construct(EncryptionContract $encryptionContract, LinkRepositoryContract $linkRepository)
    {
        $this->encryption = $encryptionContract;
        $this->linkRepository = $linkRepository;
    }

    /**
     * Return short url
     *
     * @param string $url
     * @return string
     */
    public function getShortUrl(string $url): string
    {
        $link = $this->linkRepository->firstOrCreate([
            'url' => $url
        ]);

        return url($this->encryption->encode((string)$link->getKey()));
    }

    /**
     * Return long url
     *
     * @param string $shortCode
     * @return string
     */
    public function getLongUrl(string $shortCode): string
    {
        $id = $this->encryption->decode($shortCode);

        $link = $this->linkRepository->findById((int)$id);

        if ($link === null) {
            throw new NotFoundHttpException();
        }

        return $link->url;
    }
}
