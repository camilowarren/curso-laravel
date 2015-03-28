<?php

Route::get('/', function() {
    return View::make('perfil.perfil')
                    ->with("nombre", "Camilo")
                    ->with("edad", "23");
    
});


Route::controller('personal', 'PersonalController');
Route::controller('clase', 'Clase2Controller');

