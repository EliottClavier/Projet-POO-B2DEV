<?php

require_once('APIData.php');

class People extends APIData
{

    public $name;
    public $birth_year;
    public $eye_color;
    public $gender;
    public $hair_color;
    public $height;
    public $mass;
    public $skin_color;
    public $homeworld;
    public array $films;
    public array $species;
    public array $starships;
    public array $vehicles;

    public function getBMI() {
        return $this->mass / $this->height;
    }

}