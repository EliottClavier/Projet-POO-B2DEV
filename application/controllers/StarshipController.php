<?php

require_once ROOT_PATH . 'controllers/Manager.php';
require_once ROOT_PATH . 'models/Starship.php';
require_once ROOT_PATH . 'interfaces/ControllerInterface.php';


class StarshipController extends Manager implements ControllerInterface
{

    public Starship $starship;

    public function __construct() {
        parent::__construct();
        $this->starship = new Starship();
    }

    public function get() {
        return $this->jsonMassMapper($this->starship, $this->sendRequest('https://swapi.dev/api/starships/')['results']);
    }

    public function getById(int $id) {
        return $this->jsonMapper($this->starship, $this->sendRequest('https://swapi.dev/api/starships/' . $id));
    }

}