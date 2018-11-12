<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    public function galleries(){

    	return $this->hasMany('App\Gallery');

    }

    /*show all portfolios*/
    public static function get_portfolios_post(){
    	$portfolios = Portfolio::all();
    	return $portfolios;
    }
}
