<?php
declare(strict_types=1);

namespace App\Contracts\Encryption;

/**
 * Interface EncryptionContract
 * @package App\Contracts\Encryption
 */
interface EncryptionContract
{
    /**
     * Return encode string
     *
     * @param string $str
     * @return string
     */
    public function encode(string $str): string;

    /**
     * Return decode string
     *
     * @param string $str
     * @return string
     */
    public function decode(string $str): string;
}
