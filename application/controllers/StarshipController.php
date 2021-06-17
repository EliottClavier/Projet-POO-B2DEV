<?php

require_once ROOT_PATH . 'controllers/Manager.php';
require_once ROOT_PATH . 'models/Starship.php';
require_once ROOT_PATH . 'interfaces/ControllerInterface.php';


class StarshipController extends Manager implements ControllerInterface
{

    public function get() {
        return $this->jsonMassMapper(new Starship(), $this->sendRequest('https://swapi.dev/api/starships/')['results']);
    }

    public function getById(int $id) {
        return $this->jsonMapper(new Starship(), $this->sendRequest('https://swapi.dev/api/starships/' . $id));
    }

}