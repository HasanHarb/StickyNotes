<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'persons';

    public function user()
    {
        return $this->belongsTo('App\User' , 'user_id     ');
    }
}
