<?php

class Clase2Controller extends BaseController {

    public function getCss($tipo) {
        if ($tipo == "index") {

            return View::make('index');
        }
    }

}
