<?php

require('controllers/Manager.php');

$manager = new Manager();
print_r($manager->sendRequest('https://swapi.dev/api/planets/'));