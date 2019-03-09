<?php
declare(strict_types=1);

namespace App\Services\Encryption;

use App\Contracts\Encryption\EncryptionContract;

/**
 * Class Encryption
 * @package App\Services\Encryption
 */
class Encryption implements EncryptionContract
{
    /**
     * Return encode string
     *
     * @param string $str
     * @return string
     */
    public function encode(string $str): string
    {
        return base64_encode($str);
    }

    /**
     * Return decode string
     *
     * @param string $str
     * @return string
     */
    public function decode(string $str): string
    {
        return base64_decode($str);
    }
}
