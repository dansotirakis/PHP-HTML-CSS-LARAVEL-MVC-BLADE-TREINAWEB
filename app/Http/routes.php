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

Route::get('inicio/{nome}',function($nome){
    Return "Bem vindo, $nome! ";
});
Route::get('/', function () {
    return view('welcome');
});
