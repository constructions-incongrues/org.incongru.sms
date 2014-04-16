<?php
$database = file(__DIR__.'/database.txt');
echo htmlspecialchars_decode($database[array_rand($database)], ENT_QUOTES);
