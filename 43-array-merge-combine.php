<?php

// index array


$fruit = ["Banana", "Apple", "Avocado", "Orange", "Mango"];

$vegetable = ["Potato", "Onion", "Garlic"];

$color = ["Red", "Green", "Blue"];

$newArray = array_merge($fruit,$vegetable,$color);

echo "<pre>";
print_r($newArray);
echo "</pre>";

$fruits = ["a" => "Banana", "b" => "Avocado", "c" => "Orange", "d" => "Mango"];

$vegetables = ["b" => ["color" => ["Red", "Blue", "Green"]],
              "f" => "Onion",
              "g" => "Garlic",
              313,
              ];

$newArray = array_merge($fruits, $vegetables);
// $newArray = $fruit + $vegetable;
// $newArray = array_merge_recursive($fruit, $vegetable);
//
//
echo "<pre>";
print_r($newArray);
echo "</pre>";


$name = ["Mazharul", "Islam", "Titu"];
$age = ["35", "30", "32"];

$newArray = array_combine($name,$age);

echo "<pre>";
print_r($newArray);
echo "</pre>";
?>
