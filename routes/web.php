<?php



	Route::get('/equipments', 'EquipmentsController@index');
	Route::get('/equipments/add', 'EquipmentsController@create');
	Route::post('/equipments/store', 'EquipmentsController@store');
	Route::get('/equipments/{equipment}/edit', 'EquipmentsController@edit');
	Route::post('/equipments/{equipment}/update', 'EquipmentsController@update');
	Route::get('/equipments/{equipment}/delete', 'EquipmentsController@destroy');


	Route::get('/word', 'ReportsController@word');
	Route::get('/excel', 'ReportsController@excel');





