<?php

require_once ROOT_PATH . 'controllers/Manager.php';
require_once ROOT_PATH . 'models/Planet.php';
require_once ROOT_PATH . 'interfaces/ControllerInterface.php';


class PlanetController extends Manager implements ControllerInterface
{

    public Planet $planet;

    public function __construct() {
        parent::__construct();
        $this->planet = new Planet();
    }

    public function get() {
        return $this->jsonMassMapper($this->planet, $this->sendRequest('https://swapi.dev/api/planets/')['results']);
    }

    public function getById(int $id) {
        return $this->jsonMapper($this->planet, $this->sendRequest('https://swapi.dev/api/planets/' . $id));
    }

}