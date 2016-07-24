<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Aplicando ruta de grupo

Route::get('/', function () {
  return view('welcome');
})->name('home');


//Ruteo Normal


//
//Route::get('/do/greet', function () {
//    return view('actions.greet');
//})->name('greet');
//
//Route::get('/do/salute/{name?}', function ($name = null) {
//  return view('actions.salute', ['name'=> $name]);
//})->name('salute');
//
//Route::get('/do/hug', function () {
//  return view('actions.hug');
//})->name('hug');
//
//
//Route::post('/do', function (\Illuminate\Http\Request $request) {
//  if(isset($request['action']) && $request['name'] )
//  {
//    if(strlen($request['name']) > 0)
//    {
//      return view('actions.nice', ['action'=> $request['action'], 'name'=> $request['name'] ]);
//    }
//    return redirect()->back();
//  }
//  return redirect()->back();
//})->name('benice');




Route::group(['prefix'=> 'do'], function()
{

  // Agregando Acciones de controlador
  Route::get('/{actions}/{name?}', [
      'uses'=> 'NiceActionController@getNiceAction',
      'as' => 'niceaction'
  ]);





  Route::get('/', function () {
    return view('welcome');
  })->name('home');

  Route::get('/greet', function () {
    return view('actions.greet');
  })->name('greet');

  Route::get('/salute/{name?}', function ($name = null) {
    return view('actions.salute', ['name'=> $name]);
  })->name('salute');

  Route::get('/hug', function () {
    return view('actions.hug');
  })->name('hug');





  Route::post('/', [
      'uses'=> 'NiceActionController@postNiceAction',
      'as' => 'benice'
  ]);



//  Route::post('/', function (\Illuminate\Http\Request $request) {
//    if(isset($request['action']) && $request['name'] )
//    {
//      if(strlen($request['name']) > 0)
//      {
//        return view('actions.nice', ['action'=> $request['action'], 'name'=> $request['name'] ]);
//      }
//      return redirect()->back();
//    }
//    return redirect()->back();
//  })->name('benice');


});




