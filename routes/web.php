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
    return view('home');
});

Route::get('/actividad1',function (){
    return view('login1');
});
Route::get('/actividad2',function (){
    return view('login2');
});
Route::get('/actividad3',function (){
    return view('login3');
});
Route::get('/actividad4',function (){
    return view('login4');
});


Route::post('/formact1','PreguntasController@login1');
Route::post('/formact2','PreguntasController@login2');
Route::post('/formact3','PreguntasController@login3');
Route::post('/formact4','PreguntasController@login4');





Route::get('/prueba',function (){
    return view('prueba');
});