<?php

require_once ROOT_PATH . 'controllers/Manager.php';
require_once ROOT_PATH . 'models/Species.php';


class SpeciesController extends Manager
{

    public function get() {
        return $this->jsonMassMapper(new Species(), $this->sendRequest('https://swapi.dev/api/species/')['results']);
    }

}