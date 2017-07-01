<?php

if (!function_exists('dos_base64decode')) {
    /**
     * @param string $string
     * @return bool|string
     */
    function dos_base64decode($string)
    {
        if (preg_match('/base64/', $string)) {
            return base64_decode(preg_replace('/^data:image\/\w+;base64,/i', '', $string));
        }

        return false;
    }
}
