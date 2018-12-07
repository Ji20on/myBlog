<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;


class Blog extends Model
{
    public static function get_blog_post(){
    	$blogs = Blog::all();
    	return $blogs;
}


    /*show portfolio where in out*/
    public static function out_of_blog($id){
        $outOfBlog = DB::table('blogs')->whereNotIn('id',[$id])->limit(3)->get();
        return $outOfBlog;
    }

}
