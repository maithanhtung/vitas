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

Route::get('/','VitasController@viewIndex' )->name('viewIndex');

Route::delete('/{id}', array('uses' => 'VitasController@delTitle', 'as' => 'Deltitle'));

Route::get('/addtitle','VitasController@viewaddTitle')->name('viewaddTitle');

Route::post('/addtitle','VitasController@postTitle')->name('postTitle');

Route::get('/viewtask/{title_id}','VitasController@viewTask')->name('viewTask');

Route::delete('/viewtask/{id}', array('uses' => 'VitasController@delTask', 'as' => 'Deltask'));

Route::get('/addtask/{title_id}','VitasController@viewaddTask')->name('viewaddTask');

Route::post('/addtask/{title_id}','VitasController@postTask')->name('postTask');
	

