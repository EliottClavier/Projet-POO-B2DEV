<?php

require_once('APIData.php');

class Species extends APIData
{

    public $name;
    public $classification;
    public $designation;
    public $average_height;
    public $average_lifespan;
    public $hair_colors;
    public $skin_colors;
    public $language;
    public $homeworld;
    public $people = [];
    public $films = [];

}