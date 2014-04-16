<?php
$database = file('http://resterdigne.net/database.txt');
echo htmlspecialchars_decode(utf8_decode($database[array_rand($database)]), ENT_QUOTES);
