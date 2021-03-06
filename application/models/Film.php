<?php

require_once('APIData.php');

class Film extends APIData
{

    public $title;
    public $episode_id;
    public $opening_crawl;
    public $director;
    public $producer;
    public $release_date;
    public $species = [];
    public $starships = [];
    public $vehicles = [];
    public $characters = [];

    // Propriétés supplémentaires
    public $rating = [];

    public function __construct()
    {
        $this->rating = [];
    }

    public function rateFilm($note) {
        array_push($this->rating, $note);
    }

    public function getRatingAverage() {
        return array_sum($this->rating) / sizeof($this->rating);
    }

}