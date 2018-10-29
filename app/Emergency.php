<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emergency extends Model
{
    protected $table = 'emergencies';

    protected $fillable = [
        'subject',
        'description'

    ];

}
