<?php
/**
 * SMS script
 * Debug service
 */
header('Content-Type: text/html; charset=utf-8');

$out = print_r($_GET, true);

die( $out );
