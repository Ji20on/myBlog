<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    public function galleries(){

    	return $this->hasMany('App\Gallery');

    }
}
