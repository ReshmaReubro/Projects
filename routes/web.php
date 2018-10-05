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

Route::get('/', 'WorksController@index');


/*function () {
	
	$services = \App\Service::latest()->get();

	$featured_works = \App\Work::with('service')->where('featured','=','1')->get();

    return view('index',compact('services','featured_works'));
});*/

Route::post('sendemail','SendMailController@send');

Route::group(['prefix' => 'services'], function()
{
	Route::get('{service}', 'WorksController@workList');
	Route::get('{service}/{work}', 'WorksController@show');
	// Route::get('{category}/{subcategory}', 'PostsController@subcategory_postList');
	// Route::get('{category}/{subcategory}/{slug}', 'PostsController@show');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
