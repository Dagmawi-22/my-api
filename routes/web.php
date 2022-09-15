<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/x', function () {
    return view('x');
});

Route::get('/y', function () {
    $cat = request('cat');

    if(isset($cat)){
        $cat = strip_tags(request('cat'));

        return ('<h1>category is: '.$cat.'</h1>');
    }

    if(!isset($cat)){
        return ('<h1>unknown<h1>');
    }
   
});


Route::get('/y/{category?}/{item?}', function ($category=null, $item=null) {

    
    if(isset($category)){

        if(isset($item)){
            return ($category.'+'.$item); 
        }
        return ($category);
    }

   



});



