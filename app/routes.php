<?php

Route::get('/', function() {
    return View::make('tabla');
});



Route::controller('personal', 'PersonalController');
Route::controller('clase', 'Clase2Controller');

