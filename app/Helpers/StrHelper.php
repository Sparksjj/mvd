<?php
namespace App\Helpers;

class StrHelper {

    public static function getCatFolder($cat)
    {
        $str = self::rmSpaces($cat->title_en) . $cat->id;
        return $str;
    }

    /*prvate function*/
    private static function rmSpaces($str) {
        $str = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $str);
        $str = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $str);
        return $str;
    }
}
