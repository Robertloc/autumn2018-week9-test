<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    public function images()
    {
        belongsToMany('App\Image');
    }
}
