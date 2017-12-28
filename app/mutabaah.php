<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mutabaah extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
