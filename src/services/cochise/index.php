<?php
/**
 * SMS script
 * Jacques Cochise emulator
 */
header('Content-Type: text/html; charset=utf-8');
$say = file(__DIR__."/cochise.txt");

shuffle($say);

die( $say[0] );
