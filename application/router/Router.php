<?php

require_once ROOT_PATH . 'controllers/Manager.php';

class Router extends Manager
{

    public function getControllerFromURL() {
        $url = $this->splitURL($_SERVER['REQUEST_URI']);
        echo $url[3];
        switch($url[3]) {
            case 'films':
                return $this->films();
            case 'people':
                return new PeopleController();
            case 'planets':
                return new PlanetController();
            case 'species':
                return new SpeciesController();
            case 'starship':
                return new StarshipController();
            case 'vehicle':
                return new VehicleController();
        }
        return true;
    }

    private function splitURL(string $url) {
        return explode('/', parse_url($url)['path']);
    }

}