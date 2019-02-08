<?php

namespace App\Helper;

class Helper{

    public static function getSlug($line)
    {
        $line = strtolower($line);
        return $line;
    }
}