<?php

define('ROOT_PATH', realpath(dirname(__FILE__)) . DIRECTORY_SEPARATOR);
require('router/Router.php');
$router = new Router();
$router->getControllerFromURL();

//require('controllers/Manager.php');
//require('models/Planet.php');
//
//$manager = new Manager();
//$planet = $manager->jsonMapper(new Planet(), $manager->sendRequest('https://swapi.dev/api/planets/1/'));
//header('Content-Type: application/json');
//echo json_encode($planet, JSON_PRETTY_PRINT);
//
//$planets = $manager->jsonMassMapper($manager->sendRequest('https://swapi.dev/api/planets/')['results']);
//header('Content-Type: application/json');
//echo json_encode($planets, JSON_PRETTY_PRINT);