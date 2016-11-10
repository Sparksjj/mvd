<?php

namespace App\Helpers;
use App\Hashtag;

class HashTagsHelper {

    public static function saveHashtags($tags)
    {
        $tags_arr = explode('#', $tags);

        foreach ($tags_arr as $key => &$value) {

            if ($key !=0) {
                $value = '#' . trim($value);
                $hash = Hashtag::firstOrCreate(['tag'=>$value]);
                $value = $hash->id;
            }

        }
        array_shift($tags_arr);
        return $tags_arr;
    }
    
}
