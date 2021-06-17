<?php

require_once ROOT_PATH . 'controllers/Manager.php';
require_once ROOT_PATH . 'models/Film.php';
require_once ROOT_PATH . 'interfaces/ControllerInterface.php';


class FilmController extends Manager implements ControllerInterface
{

    public Film $film;

    public function __construct() {
        parent::__construct();
        $this->film = new Film();
    }

    public function get() {
        return $this->jsonMassMapper($this->film, $this->sendRequest('https://swapi.dev/api/films/')['results']);
    }

    public function getById(int $id) {
        return $this->jsonMapper($this->film, $this->sendRequest('https://swapi.dev/api/films/' . $id));
    }

}