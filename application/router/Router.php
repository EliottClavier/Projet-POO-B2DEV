<?php

require_once ROOT_PATH . 'controllers/Manager.php';

class Router extends Manager
{

    public function getControllerFromURL() {
        $url = $this->splitURL($_SERVER['REQUEST_URI']);
        // Récupération ID dans l'URL
//        $id = null;
//        if (isset($url[2]) && is_numeric($url[2])) {
//            $id = (int)$url[2];
//        }
        switch($url[1]) {
            case 'films':
                $this->films();
                break;
            case 'people':
                $this->peoples();
                break;
            case 'planets':
                $this->planets();
                break;
            case 'species':
                $this->species();
                break;
            case 'starships':
                $this->starships();
                break;
            case 'vehicles':
                $this->vehicles();
                break;
        }
        return true;
    }

    private function splitURL(string $url) {
        return explode('/', parse_url($url)['path']);
    }

}