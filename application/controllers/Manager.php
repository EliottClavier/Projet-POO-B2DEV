<?php


class Manager
{

    public $curl;

    public function __construct() {
        $this->curl = $this->setcURL();
    }

    public function setcURL() {
        return curl_init();
    }

    public function sendRequest($url) {
        curl_setopt($this->curl, CURLOPT_URL, $url);
        $response = curl_exec($this->curl);
        curl_close($this->curl);
        return json_decode($response, true);
    }

}