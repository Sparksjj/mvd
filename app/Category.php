<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	public function children() {
        $result = $this->hasMany('App\Category', 'parent_id');
        return($result);
    }
    public function documents()
    {
        return $this->hasMany('App\Document');
    }
}
