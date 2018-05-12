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
    session()->flush();
    return view('home');
})->name('home');

Route::get('/question', 'QuestionController@show')->name('question.show');
Route::post('/question', 'QuestionController@save')->name('question.answer');
Route::get('/result', 'ResultController@index')->name('result');