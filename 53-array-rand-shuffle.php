<?php

// $fruit = array("Banana", "Apple", "Avocado", "Orange", "Mango");

$fruit = array("a" => "Banana", "b" => "Apple", "c" => "Avocado", "d" => "Orange", "e" => "Mango");

// $newArray = array_rand($fruit);

// $newArray = array_rand($fruit, 2);



// echo "<pre>";
// print_r($newArray);
// echo "</pre>";

// echo $fruit[$newArray];

// echo $fruit[$newArray[0]] . "<br>";
//
// echo $fruit[$newArray[1]];

shuffle($fruit);

echo "<pre>";
print_r($fruit);
echo "</pre>";

 ?>
