<?php
$database = file('http://norme.resterdigne.net/normal.txt');
echo 'NORMAL : '. htmlspecialchars_decode($database[array_rand($database)], ENT_QUOTES);
