<?php

require_once ROOT_PATH . 'controllers/Manager.php';
require_once ROOT_PATH . 'models/Planet.php';
require_once ROOT_PATH . 'interfaces/ControllerInterface.php';


class PlanetController extends Manager implements ControllerInterface
{

    public function get() {
        return $this->jsonMassMapper(new Planet(), $this->sendRequest('https://swapi.dev/api/planets/')['results']);
    }

    public function getById(int $id) {
        return $this->jsonMapper(new Planet(), $this->sendRequest('https://swapi.dev/api/planets/' . $id));
    }

}