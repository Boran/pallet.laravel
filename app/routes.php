<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route::get('/', function()
//{
//	return View::make('hello');
//});

//Route::get('/', 'HomeController@showWelcome');

Route::get('/',       'PalletController@showWelcome');
Route::get('/pallet', 'PalletController@showWelcome');
Log::info('Routes.php after /pallet');
Log::info('Routes.php', array('foo' => 'bar'));


Route::post('palletmake', 'PalletController@makePallet');
//Route::post('palletmake', function(){
//    Log::info('Route::post palletmake');
//
//    $pallet->rollwidth_mm = Input::get('rollwidth_mm');  // do we have to do this for all elements?
//    //$pallet->makePallet();
//    return View::make('pallet')->with('pallet',$pallet);
//});

//Route::resource('pallet', 'PalletController');

//Route::get('users', function()
//{
//    return View::make('pallet');
//});