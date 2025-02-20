<?php
require "./Collection.php";

$fruits = ["Perinha", "Uvinha", "Bacatizinho", "Goiabinha"];

$collection = new Collection($fruits);
$collection->add("name", "Pedrin");

foreach($collection as $key => $value){
    echo "<br>";
    print_r($key." => ". $value);
    echo "<br>";
}

$collectionUpper = $collection->map(fn($fruit) => strtoupper($fruit));
var_dump($collectionUpper);
echo "<br>";
$collectionLower = $collection->map(fn($fruit) => strtolower($fruit));
var_dump($collectionLower);
echo "<br>";
$collectionLower = $collection->filter(fn($fruit) => strlen($fruit) >= 7);
var_dump($collectionLower);
echo "<br>";
$collection->order();
var_dump($collection);
echo "<br>";
$collection->order("desc");
var_dump($collection);
