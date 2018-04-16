<?php

use PhpParser\Node\Stmt\Return_;

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
Route::get('/test',function(){
    return 'TreinaWeb';
});

Route::get('inicio/{nome}/{pronome?}',['as' => 'home' ,function($nome, $pronome = 'Sr.'){
    Return view('inicio',['nome'=>$nome]);
}])->where('nome','[A-Za-z]+');

Route::get('breniak', function () {
    return view('welcome');
});

//rotas bootstrap template

Route::get('/', function () {
    return view('testBootstrap');
});
Route::get('sobre', function () {
    return view('sobre');
});
Route::get('contato', function () {
    return view('contato');
});
Route::post('contato', function () {
    return Request::all();
});
