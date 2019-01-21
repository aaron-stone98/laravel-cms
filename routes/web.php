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
    
    return view('home');
});

Route::get('/about', function () {
    
    return view('about');
});

Route::get('/contact', function () {
    
    return view('contact');
});







/**Route::get('/post/{id}/{name}',function($id,$name) {
	return "This is post number".$id." ".$name;
});

Route::get('/admin/posts/example',array('as'=>'admin.home',function(){
	$url = route('admin.home');
	return "This is my url".$url;
}));
//Route::get('/post/{id}/{name}','PostsController@index');
Route::resource('post','PostsController');
Route::get('/contact','PostsController@show_contact')->name('contact');
Route::get('/page/{id}/{name}/{password}','PostsController@page');*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
