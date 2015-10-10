<?php

/*Online writers Application*/
Route::get('writers_registration','WritersController@register');
Route::post('writers_store','WritersController@store');
Route::get('writers_display','WritersController@show');
Route::get('writers_edit/{id}/edit','WritersController@edit');
Route::get('writers_delete/{id}/delete','WritersController@delete');
Route::patch('writer_update/{id}', 'WritersController@update');


//Userhub section//
Route::get('userhub','UserhubController@index');
Route::get('userhub_show','UserhubController@show');
Route::post('userhub_register','UserhubController@store');

//department section//
Route::get('dept','DepartmentController@index');
Route::get('dept/create', 'DepartmentController@create');
Route::get('dept/{id}','DepartmentController@dept');
Route::post('dept_info','DepartmentController@store');


Route::get('/','ApplicationForm@welcome');
Route::get('application/{subj?}','ApplicationForm@application');
Route::get('applicationList/{id?}','ApplicationForm@applicationList');