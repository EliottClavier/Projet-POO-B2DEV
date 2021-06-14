<?php

require_once ROOT_PATH . 'controllers/Manager.php';
require_once ROOT_PATH . 'models/People.php';


class PeopleController extends Manager
{

    public function get() {
        return $this->jsonMassMapper(new People(), $this->sendRequest('https://swapi.dev/api/people/')['results']);
    }

}