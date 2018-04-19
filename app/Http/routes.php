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
Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'institucional'], function() {

    Route::get('sobre', ['as' => 'sobre', function () {
        return view('sobre');
    }]);
    Route::get('contato', ['as' => 'contato', function () {
        return view('contato');
    }]);
    Route::post('contato', ['as' => 'contato.send', function () {
        return Request::all();
    }]);

});