<?php

define('ROOT_PATH', realpath(dirname(__FILE__)) . DIRECTORY_SEPARATOR);
require ('router/Router.php');
(new Router)->getControllerFromURL();