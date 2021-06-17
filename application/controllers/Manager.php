<?php

// Importe tous les controllers
foreach (glob(ROOT_PATH . "controllers/*.php") as $filename)
{
    require_once $filename;
}


class Manager
{

    public $curl;

    public function __construct() {
        $this->curl = $this->setcURL();
    }

    public function setcURL() {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        return $curl;
    }

    public function sendRequest($url) {
        curl_setopt($this->curl, CURLOPT_URL, $url);
        $response = curl_exec($this->curl);
        curl_close($this->curl);
        $this->curl = $this->setcURL();
        return json_decode($response, true);
    }

    public function jsonMapper(object $object, array $json) {
        foreach($json as $key=>$value){
            $object->$key = $value;
        }
        return $object;
    }

    public function jsonMassMapper(object $object, array $arrayObjects) {
        $array = array();
        foreach($arrayObjects as $obj) {
            array_push($array, $this->jsonMapper($object, $obj));
        }
        return $array;
    }

    public function films($id) {
        $controller = new FilmController();
        if ($id) {
            print_r($controller->getById($id));
        } else {
            print_r($controller->get());
        }
    }

    public function peoples($id) {
        $controller = new PeopleController();
        if ($id) {
            print_r($controller->getById($id));
        } else {
            print_r($controller->get());
        }
    }

    public function planets($id) {
        $controller = new PlanetController();
        if ($id) {
            print_r($controller->getById($id));
        } else {
            print_r($controller->get());
        }
    }

    public function species($id) {
        $controller = new SpeciesController();
        if ($id) {
            print_r($controller->getById($id));
        } else {
            print_r($controller->get());
        }
    }

    public function starships($id) {
        $controller = new StarshipController();
        if ($id) {
            print_r($controller->getById($id));
        } else {
            print_r($controller->get());
        }
    }

    public function vehicles($id) {
        $controller = new VehicleController();
        if ($id) {
            print_r($controller->getById($id));
        } else {
            print_r($controller->get());
        }
    }

}