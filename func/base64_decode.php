<?php

if (!function_exists('dos_base64_decode')) {
    /**
     * @param string $string
     * @return bool|string
     */
    function dos_base64_decode($string)
    {
        return \Dos\Utils\Base64::decode($string);
    }
}
