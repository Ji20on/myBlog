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
          'content' => 'required|string',
          'blogthumb' => 'required|string'
      );
        $this->validate($request,$rules);
        /*insert*/
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->author = $request->author;
        $blog->description = $request->content;
        $blog->slug = str_slug($request->title);
        $blog->blog_thumb = $request->blogthumb;

        if($blog->save()){
            Session::flash('msg','Succesfully added');
            return redirect()->back();
        } 
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
            'content' => 'required|string',
            'blogthumb' => 'required|string'
        );
        $this->validate($request,$rules);
        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->author = $request->author;
        $blog->description = $request->content;
        $blog->blog_thumb = $request->blogthumb;

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



       /*view blog*/
    public function getBlogLink($slug){
        $blog = Blog::where('slug',$slug)->first();
        return view('pages.blog-page',compact('blog'));
    }

    /*view all blog*/
    public function getAllBlog(){
        return view('pages.blogs');
    }

}

