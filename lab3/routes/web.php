<?php

Route::get('/task', "MytaskController@add");
Route::get('/myResult',"MytaskController@display");


Route::post('/myResult',"MytaskController@store");

Route::get('/delete/{id}',"MytaskController@delete"); 


Route::get('/update/{id}',"MytaskController@update");
Route::post('/update/{id}',"MytaskController@donee"); 

Auth::routes();
Route::get('/home','HomeController@index');

Route::get("/",function(){
	return view("welcome");	
});