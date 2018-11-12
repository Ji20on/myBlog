<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;

use Session;



class BlogController extends Controller
{
/*add*/

    public function store(Request $request){
        /*validation*/
    	$rules = array(

    		'title' => 'required|string',
    		'author' => 'required|string',
    		'desc' => 'required|string',
    		'blogthumb' => 'required|image|mimes:jpeg,bmp,png|max:2000'
    		 );
    	$this->validate($request,$rules);
        /*insert*/
    	$blog = new Blog();
    	$blog->title = $request->title;
    	$blog->author = $request->author;
    	$blog->description = $request->desc;
    	$blog->slug = str_slug($request->title);
    	if($request->hasFile('blogthumb')){
            $image = $request->file('blogthumb');
            $feature_image = $image->getClientOriginalName();
            $featured_image_path = 'img/blog/';
            $image->move($featured_image_path, $feature_image);
            $blog->blog_thumb = $featured_image_path.$feature_image;
        }
    	$blog->save();
    	Session::flash('msg','Succesfully added');
    	return redirect()->back();
    }

/*show edit*/
      public function showEdit($id)
    {
        $blog = Blog::find($id);
        return view('auth.edit-blog', compact('blog'));
    }

/*edit save*/

    public function editSave(Request $request,$id) {
        $rules = array(
            'title' => 'required|string', 
            'author' => 'required|string',
            'desc' => 'required|string',
            'blogthumb' => 'image|mimes:jpeg,bmp,png|max:2000'
        );
        $this->validate($request,$rules);
        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->author = $request->author;
        $blog->description = $request->desc;
        if ($request->hasFile('blogthumb')) {
            $image = $request->file('blogthumb');
            $feature_image = $image->getClientOriginalName();
            $feature_image_path = 'img/blog/';
            $image->move($feature_image_path,$feature_image);
            $blog->blog_thumb = $feature_image_path.$feature_image;
        }
        $blog->save();
        Session::flash('msg','Succesfully Updated');
        return redirect()->back();
         

    }


    /*delete*/

    public function deleteBlog(Request $request){
        $blog = Blog::find($request->blog_id);
        $blog->delete();
        Session::flash('msg','Successfully Deleted');
        return redirect()->back();
    }

}

