<?php

require_once ROOT_PATH . 'controllers/Manager.php';
require_once ROOT_PATH . 'models/Vehicle.php';
require_once ROOT_PATH . 'interfaces/ControllerInterface.php';


class VehicleController extends Manager implements ControllerInterface
{

    public function get() {
        return $this->jsonMassMapper(new Vehicle(), $this->sendRequest('https://swapi.dev/api/vehicles/')['results']);
    }

    public function getById(int $id) {
        return $this->jsonMapper(new Vehicle(), $this->sendRequest('https://swapi.dev/api/vehicles/' . $id));
    }

}