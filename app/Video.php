<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function projector()
    {
        return $this->belongsTo('App\Projector');
    }
}
