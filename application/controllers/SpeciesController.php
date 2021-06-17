<?php

require_once ROOT_PATH . 'controllers/Manager.php';
require_once ROOT_PATH . 'models/Species.php';
require_once ROOT_PATH . 'interfaces/ControllerInterface.php';


class SpeciesController extends Manager implements ControllerInterface
{

    public Species $species;

    public function __construct() {
        parent::__construct();
        $this->species = new Species();
    }

    public function get() {
        return $this->jsonMassMapper($this->species, $this->sendRequest('https://swapi.dev/api/species/')['results']);
    }

    public function getById(int $id) {
        return $this->jsonMapper($this->species, $this->sendRequest('https://swapi.dev/api/species/' . $id));
    }

}