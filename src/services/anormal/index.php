<?php
$database = file('http://norme.resterdigne.net/normal.txt');
echo 'ANORMAL : '. htmlspecialchars_decode($database[array_rand($database)], ENT_QUOTES);
