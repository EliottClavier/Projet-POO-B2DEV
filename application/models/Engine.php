<?php

require_once('APIData.php');

class Engine extends APIData
{

    public $name;
    public $model;
    public $manufacturer;
    public $cost_in_credits;
    public $length;
    public $crew;
    public $passengers;
    public $max_atmosphering_rating;
    public $cargo_capacity;
    public $consumables;
    public array $films;
    public array $pilots;

}