<?php

require_once ROOT_PATH . 'controllers/Manager.php';

class Router extends Manager
{

    public function getControllerFromURL() {
        $url = $this->splitURL($_SERVER['REQUEST_URI']);
        // Récupération ID dans l'URL
        $id = null;
        if (isset($url[2]) && is_numeric($url[2])) {
            $id = (int)$url[2];
        }
        switch($url[1]) {
            case 'films':
                $this->films($id);
                break;
            case 'people':
                $this->peoples($id);
                break;
            case 'planets':
                $this->planets($id);
                break;
            case 'species':
                $this->species($id);
                break;
            case 'starships':
                $this->starships($id);
                break;
            case 'vehicles':
                $this->vehicles($id);
                break;
            case '':
                echo "Endpoints disponibles: <br> 
                    <ul> 
                        <li> /films </li> 
                        <li> /people </li> 
                        <li> /planets </li> 
                        <li> /species </li> 
                        <li> /starships </li> 
                        <li> /vehicles </li> 
                    </ul>
                ";
                break;
            default:
                echo "Aucune route pour l'URL suivant : " . $_SERVER['REQUEST_URI'];
        }
        return true;
    }

    private function splitURL(string $url) {
        return explode('/', parse_url($url)['path']);
    }

}