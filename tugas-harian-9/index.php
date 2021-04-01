<?php

require_once('animal.php');
require_once('frog.php');
require_once('ape.php');


$sheep = new Animal("shaun");

echo "Name : " . $sheep->get_name(); // "shaun"
echo "legs : " . $sheep->get_legs(); // 4
echo "cold blooded : " . $sheep->get_cold_blooded(); // "no"

echo "<br>";

// Frog Class
$kodok = new Frog("jack");

echo "Name : " . $kodok->get_name();
echo "legs : " . $kodok->get_legs();
echo "cold blooded : " . $kodok->get_cold_blooded();
echo "Jump : ";
$kodok->jump();

echo "<br>";
// Ape Class
$kera = new Ape("nyip");

echo "Name : " . $kera->get_name();
echo "legs : " . $kera->get_legs(); 
echo "cold blooded : " . $kera->get_cold_blooded();
echo "Yell : ";
$kera->yell();


