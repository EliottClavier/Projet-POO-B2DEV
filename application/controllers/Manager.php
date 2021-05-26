<?php


class Manager
{

    public $curl;

    public function __construct() {
        $this->curl = $this->setcURL();
    }

    public function setcURL() {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        return $curl;
    }

    public function sendRequest($url) {
        curl_setopt($this->curl, CURLOPT_URL, $url);
        $response = curl_exec($this->curl);
        curl_close($this->curl);
        $this->curl = $this->setcURL();
        return json_decode($response, true);
    }

    public function jsonMapper(object $object, array $json) {
        foreach($json as $key=>$value){
            $object->$key = $value;
        }
        return $object;
    }

    public function jsonMassMapper(array $arrayObjects) {
        $array = array();
        foreach($arrayObjects as $object) {
            array_push($array, $this->jsonMapper(new Planet(), $object));
        }
        return $array;
    }

}