<?php

Route::get('/', function() {
    return View::make('ejemplo');
});


Route::controller('personal', 'PersonalController');
Route::controller('clase', 'Clase2Controller');

