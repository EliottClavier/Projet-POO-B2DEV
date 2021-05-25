<?php

$curl = curl_init();

$opts = [
    CURLOPT_URL => 'https://swapi.dev/api/planets/',
    CURLOPT_RETURNTRANSFER => true,
];

curl_setopt_array($curl, $opts);

$response = json_decode(curl_exec($curl), true);
curl_close($curl);

echo $response;