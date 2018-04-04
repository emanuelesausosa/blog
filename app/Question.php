<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    // relations has many, A question could be have a many answers
    public function answers()
    {
        return $this->hasMany('App\Answer');
    }
}