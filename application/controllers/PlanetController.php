<?php

require_once ROOT_PATH . 'controllers/Manager.php';
require_once ROOT_PATH . 'models/Planet.php';


class PlanetController extends Manager
{

    public function get() {
        return $this->jsonMassMapper(new Planet(), $this->sendRequest('https://swapi.dev/api/planets/')['results']);
    }

    public function getById(int $id) {
        return $this->jsonMapper(new Planet(), $this->sendRequest('https://swapi.dev/api/planets/' . $id));
    }

}