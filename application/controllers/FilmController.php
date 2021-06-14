<?php

require_once ROOT_PATH . 'controllers/Manager.php';
require_once ROOT_PATH . 'models/Film.php';


class FilmController extends Manager
{

    public function get() {
        return $this->jsonMassMapper(new Film(), $this->sendRequest('https://swapi.dev/api/films/')['results']);
    }

}