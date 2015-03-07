<?php


Route::get('/', function()
{
	return View::make('prueba');
});

Route::controller('personal','PersonalController');