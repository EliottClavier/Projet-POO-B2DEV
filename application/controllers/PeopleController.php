<?php

require_once ROOT_PATH . 'controllers/Manager.php';
require_once ROOT_PATH . 'models/People.php';
require_once ROOT_PATH . 'interfaces/ControllerInterface.php';


class PeopleController extends Manager implements ControllerInterface
{

    public function get() {
        return $this->jsonMassMapper(new People(), $this->sendRequest('https://swapi.dev/api/people/')['results']);
    }

    public function getById(int $id) {
        return $this->jsonMapper(new People(), $this->sendRequest('https://swapi.dev/api/people/' . $id));
    }

}