<?php

require_once ROOT_PATH . 'controllers/Manager.php';
require_once ROOT_PATH . 'models/Film.php';
require_once ROOT_PATH . 'interfaces/ControllerInterface.php';


class FilmController extends Manager implements ControllerInterface
{

    public function get() {
        return $this->jsonMassMapper(new Film(), $this->sendRequest('https://swapi.dev/api/films/')['results']);
    }

    public function getById(int $id) {
        return $this->jsonMapper(new Film(), $this->sendRequest('https://swapi.dev/api/films/' . $id));
    }

}