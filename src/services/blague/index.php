<?php
/**
 * SMS script
 * Blagues courtes
 */
header('Content-Type: text/html; charset=utf-8');

$list = file(__DIR__."/blagues.txt");

shuffle($list);

die( $list[0] );
