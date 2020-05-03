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

use App\Http\Controllers\QuestionsController;

Route::get('/', function () {
    return view('index');
});

Route::get('/welcome', function () {
    return view('botoneraWelcome');
});

Route::get('/crear/pregunta', function () {
    return view('crearPregunta');
});

Route::get('/agregar/preguntas', 'QuestionsController@formSelectCategories');

Route::post('/agregar/preguntas', 'QuestionsController@createQuestion');

Route::get('/modificar/preguntas', 'QuestionsController@listQuestion');

Route::post('/modificarla/{id}', 'QuestionsController@edit');

Route::get('modificar/la/pregunta/{id}', 'QuestionsController@editForm');

Auth::routes();