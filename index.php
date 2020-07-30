<?php

require 'animal.php';
require 'ape.php';
require 'frog.php';

$sheep = new Animal("shaun");

echo $sheep->name; // "shaun"
echo "<br>";
echo $sheep->legs; // 2
echo "<br>";
var_dump($sheep->cold_blooded); // false
echo "<br> <br>";

// dengan function get
$sheep->get_name();
echo "<br>";
$sheep->get_legs();
echo "<br>";
$sheep->get_cold_blooded();
echo "<br> <br>";

$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"
echo "<br>";
echo "legs : " . $sungokong->legs ; // 2
echo "<br> <br>";

$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"
echo "<br>";
echo "legs : " . $kodok->legs ; // 4
echo "<br> <br>";

?>
