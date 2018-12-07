<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use App\Gallery;
use Session;
use Response;

class PortfolioController extends Controller
{
	/*add portfolios*/
	public function store(Request $request){
		$rules = array(
			'title' => 'required|string',
			'category' => 'required|string',
			'desc' => 'required|string',
			'content' => 'required|string',
			'portthumb' => 'required|string',
			/*'image' => 'required|image|mimes:jpeg,bmp,png|max:2000'*/
		);
		$this->validate($request,$rules);
		/*insert*/
		$portfolio = new Portfolio();
		$portfolio->title = $request->title;
		$portfolio->category = $request->category;
		$portfolio->description = $request->desc;
		$portfolio->content = $request->content;
		$portfolio->slug = str_slug($request->title);
		$portfolio->port_thumb = $request->portthumb;
		
		if($portfolio->save()){
			Session::flash('msg','Succesfully Added');
		}
		else{
			Session::flash('msg','error');
		}
		return redirect()->back();
	}

	/*show edit*/
	public function showEdit($id)
	{
		$portfolio = Portfolio::find($id);
		return view('auth.edit-portfolio', compact('portfolio'));
	}


	/*edit portfolios*/
	public function editSave(Request $request,$id){
		$rules = array(
			'title' => 'required|string',
			'category' => 'required|string',
			'desc' => 'required|string',
			'content' => 'required|string',
			'portthumb' => 'string'
		);
		$this->validate($request,$rules);
		/*insert*/
		$portfolio = Portfolio::find($id);
		$portfolio->title = $request->title;
		$portfolio->category = $request->category;
		$portfolio->description = $request->desc;
		$portfolio->content = $request->content;
		$portfolio->slug = str_slug($request->title);
		$portfolio->port_thumb = $request->portthumb;

		if($portfolio->save()){
			Session::flash('msg','Succesfully Added');
		}

		else{
			Session::flash('msg','error');
		}
		return redirect()->back();
	}

    /*delete portfolio*/

    public function deletePortfolio(Request $request){
        $portfolio = Portfolio::find($request->portfolio_id);
        $portfolio->delete();
        Session::flash('msg','Successfully Deleted');
        return redirect()->back();
    }


    /*view portfolio*/
    public function getPortLink($slug){
    	$portfolio = Portfolio::where('slug',$slug)->first();
    	return view('pages.portfolio-page',compact('portfolio'));
    }

        /*view all portfolio*/
    public function getAllPort(){
    	return view('pages.portfolios');
    }


    /*download*/
    public function downloadCv(){
    	$cv = public_path().'/img/2/Files/markjasonlandicho_resume.pdf';
    	$header = ['Content-Type:application/pdf'];
    	return Response::download($cv,'Mark Jason Landicho Resume',$header);
    }
}
