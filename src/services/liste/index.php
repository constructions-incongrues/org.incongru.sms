<?php
/**
 * SMS script, 
 * return the list of commands
 */
header('Content-Type: text/html; charset=utf-8');

// Composer
require_once(__DIR__.'/../../../vendor/autoload.php');

// Uses
use ConstructionsIncongrues\Sms\SmsPi;

// Start stopwatch
$start = time();


$config = json_decode(file_get_contents(__DIR__.'/../../config.json'));
$smspi = new SmsPi($config);

// Get the list of services //
$list=$smspi->serviceList();

$cmds=[];

foreach ($list as $k => $r) {
    $cmds[] = $r['name'];
}


die(implode(" ", $cmds));
