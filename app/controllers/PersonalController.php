<?php

class PersonalController extends BaseController {

    public function getRegistrar($tipo, $nombre, $edad) {
        echo "Hola {$nombre} eres del tipo {$tipo} tienes {$edad}";
        if ($tipo == "medico") {
            return View::make('registro.medico');
        } else if ($tipo == "enfermera") {
            
        }
    }

    

}
