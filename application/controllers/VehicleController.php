<?php

require_once ROOT_PATH . 'controllers/Manager.php';
require_once ROOT_PATH . 'models/Vehicle.php';
require_once ROOT_PATH . 'interfaces/ControllerInterface.php';


class VehicleController extends Manager implements ControllerInterface
{

    public Vehicle $vehicle;

    public function __construct() {
        parent::__construct();
        $this->vehicle = new Vehicle();
    }

    public function get() {
        return $this->jsonMassMapper($this->vehicle, $this->sendRequest('https://swapi.dev/api/vehicles/')['results']);
    }

    public function getById(int $id) {
        return $this->jsonMapper($this->vehicle, $this->sendRequest('https://swapi.dev/api/vehicles/' . $id));
    }

}