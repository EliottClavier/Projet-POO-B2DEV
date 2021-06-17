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

    // Met en place une instance de cURL
    public function setcURL() {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        return $curl;
    }

    // Envoie une requête par la biais de cURL
    public function sendRequest($url) {
        curl_setopt($this->curl, CURLOPT_URL, $url);
        $response = curl_exec($this->curl);
        curl_close($this->curl);
        $this->curl = $this->setcURL();
        return json_decode($response, true);
    }

    // Transforme un JSON en objet, en fonction du type d'object passé
    public function jsonMapper(object $object, array $json) {
        foreach($json as $key=>$value){
            $object->$key = $value;
        }
        return $object;
    }

    // Transforme les réponses JSON de l'API avec plus d'un objet JSON en un tableau d'objets
    public function jsonMassMapper(object $object, array $arrayObjects) {
        $array = array();
        foreach($arrayObjects as $obj) {
            array_push($array, $this->jsonMapper($object, $obj));
        }
        return $array;
    }

    // Appele les fonctions du controller passé en paramètre (get() ou getById() si un id est renseigné)
    private function useController(object $controller, $id) {
        if ($id) {
            echo "<pre>";
            print_r($controller->getById($id));
            echo "</pre>";
        } else {
            echo "<pre>";
            print_r($controller->get());
            echo "</pre>";
        }
    }

    // Génération et utilisation du controller Film
    public function films($id) {
        $controller = new FilmController();
        $this->useController($controller, $id);
    }

    // Génération et utilisation du controller People
    public function peoples($id) {
        $controller = new PeopleController();
        $this->useController($controller, $id);
    }

    // Génération et utilisation du controller Planet
    public function planets($id) {
        $controller = new PlanetController();
        $this->useController($controller, $id);
    }

    // Génération et utilisation du controller Species
    public function species($id) {
        $controller = new SpeciesController();
        $this->useController($controller, $id);
    }

    // Génération et utilisation du controller Starships
    public function starships($id) {
        $controller = new StarshipController();
        $this->useController($controller, $id);
    }

    // Génération et utilisation du controller Vehicles
    public function vehicles($id) {
        $controller = new VehicleController();
        $this->useController($controller, $id);
    }

}