<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projector extends Model
{
    public function videos()
    {
        return $this->hasMany('App\Video');
    }
}