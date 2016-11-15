<?php
namespace App\Helpers;

use App\Category;
use App\Document;
use Lang;

class TreeHelper {

    public static function getTree()
    {
        $tree = [
            'categoryes' => [
                'name' => trans('admin.categories'),
                'have_child' => false,
                'id' => 'all_categories',
            ],
        ];
        $categories = Category::all();

        foreach ($categories as $key => $value) {
            $tree['categoryes']['have_child'] = true;

            if (count($value->documents) > 0) {
                $tree['categoryes'][ 'children' ][ $value['name_' . Lang::getLocale()] ]['have_child'] = true;
            }else{
                $tree['categoryes'][ 'children' ][ $value['name_' . Lang::getLocale()] ]['have_child'] = false;
            }

            $tree['categoryes'][ 'children' ][ $value['name_' . Lang::getLocale()] ]['name'] = $value['name_' . Lang::getLocale()];
            $tree['categoryes'][ 'children' ][ $value['name_' . Lang::getLocale()] ]['id'] = $value['id'];
            $tree['categoryes'][ 'children' ][ $value['name_' . Lang::getLocale()] ]['children'] = $value->documents;
        }
        return $tree;
    }
}
