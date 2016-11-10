<?php
namespace App\Helpers;

class ControlHelper {

    public static function getControllPathis($url)
    {
        $arr = [];
        switch (explode('/',$url)[1]) {
            case 'documents':
                $arr[route('documents.create')] = 'create';
                break;
            
            default:
                # code...
                break;
        }
        return $arr;
    }
}
