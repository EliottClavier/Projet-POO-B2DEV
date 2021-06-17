<?php

require_once ROOT_PATH . 'controllers/Manager.php';
require_once ROOT_PATH . 'models/People.php';
require_once ROOT_PATH . 'interfaces/ControllerInterface.php';


class PeopleController extends Manager implements ControllerInterface
{

    public People $people;

    public function __construct() {
        parent::__construct();
        $this->people = new People();
    }

    public function get() {
        return $this->jsonMassMapper($this->people, $this->sendRequest('https://swapi.dev/api/people/')['results']);
    }

    public function getById(int $id) {
        return $this->jsonMapper($this->people, $this->sendRequest('https://swapi.dev/api/people/' . $id));
    }

}