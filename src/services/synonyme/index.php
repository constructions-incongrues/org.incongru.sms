<?php
/**
 * Service synonyme, 
 * http://www.crisco.unicaen.fr/des/synonymes/panier
 */

header('Content-Type: text/html; charset=utf-8');

// Composer
require_once(__DIR__.'/../../../vendor/autoload.php');

// Uses
use ConstructionsIncongrues\Curl;

// Start stopwatch
$start = time();


$body = @strtolower($_GET['body']);

if (!$body) {
    die("envois : synonyme {mot}");
}

@preg_match("/synonyme[ :]([a-z]+)/i", $body, $o);

$mot = $o[1];

if (!$mot) {
    die("envois : synonyme {mot}");
}

$URL = 'http://www.crisco.unicaen.fr/des/synonymes/' . $mot;
//echo "$URL\n";

$cc = new cURL();
$html = $cc->get($URL);//call the service
$httpCode = $cc->httpCode();
$content_type = $cc->contentType();
$content_length = $cc->contentLength();

$LIST = [];//list of synonyms

$detect= false;

if ($httpCode == 200) {

    $dat = explode("\n", $html);
    foreach ($dat as $k => $v) {
        
        //Start here
        if (preg_match("/\bClassement des premiers synonymes/i", $v)) {
            //echo "<li>Classement des premiers synonymes at line $k<br />";
            $detect = true;
        }

        if (!$detect) {
            continue;
        }

        //Stop reading here
        if (preg_match("/\bFin liste10/i", $v)) {
            //echo "<li>fin list detected at line $k<br />";
            $detect = false;//end
        }

        //echo "<li>ligne $k<br />";
        //echo htmlentities( $v );

        //Pattern : <a href="/des/synonymes/bannette">&nbsp;bannette&nbsp;</a>
        preg_match_all("/\ba href=\"\/des\/synonymes\/[a-z]+\">([a-z&;]+)/i", $v, $o);
        
        if (is_array($o) && count($o)) {
            if (count($o[1])>1) {
                $LIST = $o[1];//die();
            }
        }
    }

} else {
    //Todo : Log error here
    echo "Error $httpCode";
}

//asort($LIST);

//print_r(array_unique($LIST));
foreach ($LIST as $k => $word) {
    $word = str_replace('&nbsp;', '', $word);
    $LIST[$k] = trim(strip_tags($word));
}

echo implode(", ", $LIST);
