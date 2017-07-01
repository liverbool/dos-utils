<?php

if (!function_exists('dos_base64decode')) {
    /**
     * @param string $string
     * @return bool|string
     */
    function dos_base64decode($string)
    {
        return \Dos\Utils\Base64::decode($string);
    }
}
