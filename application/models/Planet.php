<?php

require_once('APIData.php');

class Planet extends APIData
{

    public $name;
    public $diameter;
    public $rotation_period;
    public $orbital_period;
    public $gravity;
    public $population;
    public $climate;
    public $terrain;
    public $surface_water;
    public array $residents;
    public array $films;

}