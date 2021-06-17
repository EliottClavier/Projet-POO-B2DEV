<?php

require_once ROOT_PATH . 'controllers/Manager.php';

class Router extends Manager
{

    // Accède au controller correspondant à l'URL entrée et gère les cas où les URLs ne sont pas pris en compte
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
                        <li> /films et /films/:id </li> 
                        <li> /people et /people/:id </li> 
                        <li> /planets et /planets/:id </li> 
                        <li> /species et /species/:id </li> 
                        <li> /starships et /starships/:id </li> 
                        <li> /vehicles et /vehicles/:id </li> 
                    </ul>
                ";
                break;
            default:
                echo "Aucune route pour l'URL suivant : " . $_SERVER['REQUEST_URI'];
        }
        return true;
    }

    // Découpe l'URL
    private function splitURL(string $url) {
        return explode('/', parse_url($url)['path']);
    }

}