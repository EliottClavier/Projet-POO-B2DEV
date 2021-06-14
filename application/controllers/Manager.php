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
        print_r($response);
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

    /*
     * TODO: Type de l'objet dynamique
     * */
    public function jsonMassMapper(object $object, array $arrayObjects) {
        $array = array();
        foreach($arrayObjects as $obj) {
            array_push($array, $this->jsonMapper($object, $obj));
        }
        return $array;
    }

    public function films() {
        $controller = new FilmController();
        print_r($controller->get());
    }

    public function peoples() {
        $controller = new PeopleController();
        print_r($controller->get());
    }

    public function planets() {
        $controller = new PlanetController();
        print_r($controller->get());
    }

    public function species() {
        $controller = new SpeciesController();
        print_r($controller->get());
    }

    public function starships() {
        $controller = new StarshipController();
        print_r($controller->get());
    }

    public function vehicles() {
        $controller = new VehicleController();
        print_r($controller->get());
    }

}