<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use App\Gallery;

use Session;

class PortfolioController extends Controller
{
	/*add portfolios*/
	public function store(Request $request){
		$rules = array(
			'title' => 'required|string',
			'category' => 'required|string',
			'desc' => 'required|string',
			'portthumb' => 'required|image|mimes:jpeg,bmp,png|max:2000',
			/*'image' => 'required|image|mimes:jpeg,bmp,png|max:2000'*/
		);
		$this->validate($request,$rules);
		/*insert*/
		$portfolio = new Portfolio();
		$portfolio->title = $request->title;
		$portfolio->category = $request->category;
		$portfolio->description = $request->desc;
		$portfolio->slug = str_slug($request->title);
		if($request->hasFile('portthumb')){
			$image = $request->file('portthumb');
			$feature_image = $image->getClientOriginalName();
			$feature_image_path = 'image/portfolio/';
			$image->move($feature_image_path,$feature_image);
			$portfolio->port_thumb = $feature_image_path.$feature_image;
		}

		if($portfolio->save()){
			$id = $portfolio->id;
			$gallery_images = $request->file('gallery');
			foreach ($gallery_images as $gal_img) {
				$gallery = new Gallery();
				$gallery->portfolio_id = $id;
				$img_name = $gal_img->getClientOriginalName();
				$gal_img_path = 'img/gallery/';
				$gal_img->move($gal_img_path,$img_name);
				$gallery->image = $gal_img_path.$img_name;
				$gallery->save();
			 } 
			Session::flash('msg','Succesfully Added');
		}

		else{
				Session::flash('msg','error');
		}
		return redirect()->back();
	}
}
