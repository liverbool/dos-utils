<?php

namespace Dos\Utils;

class Base64
{
    public static function decode($string)
    {
        if (preg_match('/base64/', $string)) {
            return base64_decode(preg_replace('/^data:(.*)\w+;base64,/i', '', $string));
        }

        return base64_decode($string);
    }
}
