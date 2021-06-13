<?php

require_once ROOT_PATH . 'controllers/Manager.php';

class FilmController extends Manager
{

    public function get() {
        return $this->jsonMassMapper($this->sendRequest('https://swapi.dev/api/films/')['results']);
    }

}