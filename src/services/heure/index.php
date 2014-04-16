<?php
/**
 * SMS service 'heure'
 * Retourne l'heure a peu près
 */
header('Content-Type: text/html; charset=utf-8');

$t = time();
$t+= rand(-1000, 1000);

die("il est a peu près " . date("H", $t) . "h");
