<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{
    public static function get_blog_post(){
    	$blogs = Blog::all();
    	return $blogs;
}
}
