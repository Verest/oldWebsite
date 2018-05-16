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
  return view( 'index' );
});



Route::get('/projects/{project}', function($project){
  $path = 'projects.'."$project";

  if(View::exists( $path )){
    return view( $path );
  }else{
    return view ("noExist");
  }


});

Route::get('{slug}', function($slug) {
  //this does not work for matching paths
  return view ("noExist");

})->where('slug', '^.*');
