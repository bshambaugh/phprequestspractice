<?php

include('./Requests/library/Requests.php');
Requests::register_autoloader();

//$response = Requests::get('https://github.com/timeline.json');

//$response = Requests::get('http://localhost:8080/marmotta/ldp');


$url = 'http://localhost:8080/marmotta/ldp';
$headers = array('Content-Type' => 'text/turtle','Slug' => 'Penguins are Awesome');
$response = Requests::post($url, $headers);

/*
$options = array(
    'auth' => new Requests_Auth_Basic(array('admin', 'pass123'))
);

$url = 'https://localhost:8080/marmotta/ldp';
$headers = array('Content-Type' => 'text/turtle','Slug' => 'Penguins are Awesome');
$data = array('some' => 'data');
$response = Requests::post($url, $headers, json_encode($data),$options);
//$response = Requests::post($url, $headers);
*/

var_dump($response->body);


