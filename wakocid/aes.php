<?php

/**
 * @param string $password user entered password as the only source of
 *   entropy to generate encryption key and hash key.
 * @return array($encryption_key, $hash_key) - note that PBKDF2 algorithm
 *   has been configured to take around 1-2 seconds per conversion
 *   from password to keys on a normal CPU to prevent brute force attacks.
 */

 function generate_encryptionkey_hashkey_from_password($password)
{
    $hash = hash_pbkdf2("sha512", "$password", "salt$password", 1500000);
    return str_split($hash, 64);
}

 function encrypt($plaintext, $password) {
    $method = "AES-256-CBC";
    $key = hash('sha256', $password, true);
    $iv = openssl_random_pseudo_bytes(16);

    $ciphertext = openssl_encrypt($plaintext, $method, $key, OPENSSL_RAW_DATA, $iv);
    $hash = hash_hmac('sha256', $ciphertext . $iv, $key, true);

    return $iv . $hash . $ciphertext;
}

 function decrypt($ivHashCiphertext, $password) {
    $method = "AES-256-CBC";
    $iv = substr($ivHashCiphertext, 0, 16);
    $hash = substr($ivHashCiphertext, 16, 32);
    $ciphertext = substr($ivHashCiphertext, 48);
    $key = hash('sha256', $password, true);

    if (!hash_equals(hash_hmac('sha256', $ciphertext . $iv, $key, true), $hash)) return null;

    return openssl_decrypt($ciphertext, $method, $key, OPENSSL_RAW_DATA, $iv);
}

class Crypto
{
    /**
     * Encrypt data using OpenSSL (AES-256-CBC)
     * @param string $plaindata Data to be encrypted
     * @param string $cryptokey key for encryption (with 256 bit of entropy)
     * @param string $hashkey key for hashing (with 256 bit of entropy)
     * @return string IV+Hash+Encrypted as raw binary string. The first 16
     *     bytes is IV, next 32 bytes is HMAC-SHA256 and the rest is
     *     $plaindata as encrypted.
     * @throws Exception on internal error
     *
     * Based on code from: https://stackoverflow.com/a/46872528
     */
    public static function encrypt($plaindata, $cryptokey, $hashkey)
    {
        $method = "AES-256-CBC";
        $key = hash('sha256', $cryptokey, true);
        $iv = openssl_random_pseudo_bytes(16);

        $cipherdata = openssl_encrypt($plaindata, $method, $key, OPENSSL_RAW_DATA, $iv);

        if ($cipherdata === false)
        {
            $cryptokey = "**REMOVED**";
            $hashkey = "**REMOVED**";
            throw new \Exception("Internal error: openssl_encrypt() failed:".openssl_error_string());
        }

        $hash = hash_hmac('sha256', $cipherdata.$iv, $hashkey, true);

        if ($hash === false)
        {
            $cryptokey = "**REMOVED**";
            $hashkey = "**REMOVED**";
            throw new \Exception("Internal error: hash_hmac() failed");
        }

        return $iv.$hash.$cipherdata;
    }

    /**
    * Decrypt data using OpenSSL (AES-256-CBC)
     * @param string $encrypteddata IV+Hash+Encrypted as raw binary string
     *     where the first 16 bytes is IV, next 32 bytes is HMAC-SHA256 and
     *     the rest is encrypted payload.
     * @param string $cryptokey key for decryption (with 256 bit of entropy)
     * @param string $hashkey key for hashing (with 256 bit of entropy)
     * @return string Decrypted data
     * @throws Exception on internal error
     *
     * Based on code from: https://stackoverflow.com/a/46872528
     */
    public static function decrypt($encrypteddata, $cryptokey, $hashkey)
    {
        $method = "AES-256-CBC";
        $key = hash('sha256', $cryptokey, true);
        $iv = substr($encrypteddata, 0, 16);
        $hash = substr($encrypteddata, 16, 32);
        $cipherdata = substr($encrypteddata, 48);

        if (!hash_equals(hash_hmac('sha256', $cipherdata.$iv, $hashkey, true), $hash))
        {
            $cryptokey = "**REMOVED**";
            $hashkey = "**REMOVED**";
            throw new \Exception("Internal error: Hash verification failed");
        }

        $plaindata = openssl_decrypt($cipherdata, $method, $key, OPENSSL_RAW_DATA, $iv);

        if ($plaindata === false)
        {
            $cryptokey = "**REMOVED**";
            $hashkey = "**REMOVED**";
            throw new \Exception("Internal error: openssl_decrypt() failed:".openssl_error_string());
        }

        return $plaindata;
    }
}

?>