<?php
/**
 * Service 'chuck'
 * Return a random Chuck Norris joke
 * http://www.icndb.com/api/
 */
header('Content-Type: text/html; charset=utf-8');

// Composer
require_once(__DIR__.'/../../../vendor/autoload.php');

// Uses
use ConstructionsIncongrues\Curl;

// Start stopwatch
$start = time();

//http://www.icndb.com/api/
$url='http://api.icndb.com/jokes/random';


$cc = new cURL();
$html = $cc->get($url);//call the service
$httpCode = $cc->httpCode();
$content_type = $cc->contentType();
$content_length = $cc->contentLength();
$dat = json_decode($html);

if ($httpCode==200) {
    //echo "<pre>";print_r($dat);
    echo $dat->value->joke;
}
