<?php


use Intervention\Image\ImageManagerStatic as Image;

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

	$img = Image::make('car.jpg');
	$img->resize(300,300);
	//$img->fit(100,100);
	//$img->blur(15);
	//$img->save('car1.jpg',5);

    return $img->response('png');
});


Route::get('image','ImagesController@index');

Route::post('image','ImagesController@resize_image');