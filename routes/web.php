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
});

Route::get('about', function () {
    return view('pages.about');
});

Route::get('portfolios', function () {
    return view('pages.portfolios');
});

Route::get('portfolio-page', function () {
    return view('pages.portfolio-page');
});

Route::get('blogs', function () {
    return view('pages.blogs');
});

Route::get('blog-page', function () {
    return view('pages.blog-page');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*admin route*/
Route::get('dashboard', function () {
    return view('auth.dashboard');
});

Route::get('blog-table', function () {
    return view('auth.blog-table');
})->name('blog-table');


Route::get('manage-blog', function () {
    return view('auth.manage-blog');
});

/*add blog*/
Route::post('add-blog','BlogController@store');

Route::get('manage-portfolio', function () {
    return view('auth.manage-portfolio');
});

Route::get('portfolio-table', function () {
    return view('auth.portfolio-table');
});


/*show form edit blog*/
Route::get('edit-blog/{id}', 'BlogController@showEdit');

/*action edit*/
Route::patch('edit-save-blog','BlogController@editSave')->name('edit-save-blog');