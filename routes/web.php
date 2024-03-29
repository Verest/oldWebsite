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

//for post contact form
use App\Mail\Message;

Route::get('/', function () {
  return view( 'index' );
})->name('home');

Route::post('/contact', function(){
  $message = request()->all();
  \Mail::to("richie@richieblack.me")->send(new Message($message));
  //need to redirect to home page with some flash message.
  return redirect()->route('home', ['message' => 1]);
});

Route::get('/contact', function(){
  return view( 'contact' );
});


Route::get('/no-exist', function(){
  $url=request('url');
  return view( 'noExist', compact('url'));
})->name('no-exist');


Route::get('/projects/{project}', function($project){
  $path = 'projects.'."$project";
  $current = url()->current(); //failing DRY

  if(View::exists( $path )){
    return view( $path );
  }else{
    return redirect()->route('no-exist', ['url' => $current]);
  }


});

Route::get('{slug}', function($slug) {
  $current = url()->current(); //failing DRY

  return redirect()->route('no-exist', ['url' => $current]);


})->where('slug', '^.*');
