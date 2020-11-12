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

Route::get('/', function () {
    return view('login',[
        'mnsj'=>'Inicio de sesion'
    ]);
});

Route::get('/login',[
    'uses'=>'PruebaController@login',
    'as'=>'Inicio de sesion'
]);

Route::post('/check',[
    'uses'=>'PruebaController@validacion',
    'as'=> 'validacion de datos'
]);

Route::post('/BakTTF',[
    'uses'=>'PruebaController@validacion',
    'as'=> 'validacion de datos'
]);

Route::post('/Paras',[
    'uses'=>'PruebaController@validacion',
    'as'=> 'validacion de datos'
]);

Route::post('/Vert',[
    'uses'=>'PruebaController@validacion',
    'as'=> 'validacion de datos'
]);

Route::post('/milnueve',[
    'uses'=>'PruebaController@validacion',
    'as'=> 'validacion de datos'
]);
