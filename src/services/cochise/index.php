<?php
/**
 * SMS script
 * Jacques Cochise emulator
 */
header('Content-Type: text/html; charset=utf-8');
$say = [];

$say[]= "Les pommes noisettes Picard sont les meilleurs";
$say[]= "Pour bien faire cuire les pommes noisettes, il faut dabord les prechauffer au micro onde";
$say[]= "Evite de manger des legumes";
//$say[]= "";

shuffle($say);

die( $say[0] );
