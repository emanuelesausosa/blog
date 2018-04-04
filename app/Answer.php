<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //bind Answer model to Question model, where an Answer have only one Question
    public function question()
    {
        return $this->belongsTo('App\Question');
    }
}
