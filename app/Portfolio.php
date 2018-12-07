<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

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

    /*show latest*/
    public static function latest_port(){
    	$latest = Portfolio::orderBy('created_at', 'desc')->limit(3)->get();
    	return $latest;
    }

    /*show portfolio where in out*/
    public static function out_of_port($id){
        $outOfPort = DB::table('portfolios')->whereNotIn('id',[$id])->limit(3)->get();
        return $outOfPort;
    }
}
