<?php
/**
 * SMS script, 
 * 421, concept by bozoo
 */
header('Content-Type: text/html; charset=ISO-8859-1');


$HAND = array();
$HAND[]=rand(1, 6);
$HAND[]=rand(1, 6);
$HAND[]=rand(1, 6);


die(implode(" ", $HAND));
