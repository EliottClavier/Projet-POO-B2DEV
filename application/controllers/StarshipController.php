<?php

require_once ROOT_PATH . 'controllers/Manager.php';
require_once ROOT_PATH . 'models/Starship.php';


class StarshipController extends Manager
{

    public function get() {
        return $this->jsonMassMapper(new Starship(), $this->sendRequest('https://swapi.dev/api/starships/')['results']);
    }

}