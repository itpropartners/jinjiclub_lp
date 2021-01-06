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

Route::get('/lp', 'TeaserController@index')->name('teaser.index');

Route::get('/', 'TeaserController@index')->name('teaser.index');
Route::get('/form1', 'TeaserController@form1')->name('teaser.form1');
Route::post('/form2', 'TeaserController@form2')->name('teaser.form2');

