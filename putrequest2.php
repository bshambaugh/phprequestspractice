<?php

include('./Requests/library/Requests.php');
Requests::register_autoloader();

$inputfile = "../nasafacilities/Brentsrww2.ttl";
$handle = fopen($inputfile,'r');
echo($handle);
$data = fread($handle, filesize($inputfile));
/*
$data = file_get_contents($inputfile);
$data = preg_replace('/\\n/i','',$data);
*/
echo($data);


$url = 'http://localhost:8080/marmotta/ldp/Penguins-are-Awesome';
$existingheaders = get_headers($url);
print_r($existingheaders);
echo($existingheaders[5]);
$etag = preg_replace('/ETag: /i','',$existingheaders[5]);
echo("\n");
echo($etag);
echo("\n");

$headers = array('Content-Type' => 'text/turtle','If-Match' => $etag,'Slug' => 'Penguins are Awesome');
//$headers = array('Content-Type' => 'text/turtle','If-Match' => 'W/"1459004153000"','Slug' => 'Penguins are Awesome');
$response = Requests::put($url, $headers, $data);
//$response = Requests:_put($url, $headers, json_encode($data));

var_dump($response->body);
fclose($handle);




