<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');

/*about link*/
Route::get('about', function () {
    return view('pages.about');
})->name('about');

/*get all portfolio*/
Route::get('/portfolio', 'PortfolioController@getAllPort')->name('all-port');
 /*get individual portfolio*/
Route::get('/portfolio/{slug}', 'PortfolioController@getPortLink')->name('port_link');


/*get individual blog*/
Route::get('/blog/{slug}', 'BlogController@getBlogLink')->name('blog_link');
/*get all blog*/
Route::get('/blog', 'BlogController@getAllBlog')->name('all-blog');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*login*/

$this->get('wp-nashfarom', 'Auth\LoginController@showLoginForm')->name('');

Route::fallback(function(){
	abort(404);
});

/*************************************************middleware********************/

Route::middleware(['auth'])->group(function(){

/*admin route*/
Route::get('dashboard', function () {
    return view('auth.dashboard');
})->name('dashboard');


/************************************************BLOG*/
Route::get('blog-table', function () {
    return view('auth.blog-table');
})->name('blog-table');


Route::get('manage-blog', function () {
    return view('auth.manage-blog');
});
/*add blog*/
Route::post('add-blog','BlogController@store');

/*show form edit blog*/
Route::get('edit-blog/{id}', 'BlogController@showEdit');

/*action edit*/
Route::patch('edit-save-blog/{id}','BlogController@editSave')->name('edit-save-blog');

/*action delete*/
Route::delete('delete-blog','BlogController@deleteBlog')->name('deleteBlog');



/*************************************PORTFOLIOS*/
Route::get('portfolio-table', function () {
    return view('auth.portfolio-table');
})->name('portfolio-table');

Route::get('manage-portfolio', function () {
    return view('auth.manage-portfolio');
});

/*add portfolio*/
Route::post('add-port','PortfolioController@store');

/*show form edit portfolio*/
Route::get('edit-portfolio/{id}','PortfolioController@showEdit');

/*action edit portfolio*/
Route::patch('edit-save-port/{id}','PortfolioController@editSave')->name('edit-save-port');
/*action delete*/
Route::delete('delete-portfolio','PortfolioController@deletePortfolio')->name('deletePortfolio');
});

/*************************************end middleware***********************************/

/*download file*/
Route::get('download-cv','PortfolioController@downloadCv')->name('downloadcv');

/*message contact me*/
/*message*/
Route::post('send-message','MessageController@send');