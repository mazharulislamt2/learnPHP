<?php

// $fruit = ["Banana", "Apple", "Avocado", "Orange", "Mango"];
//
// $newArray = array_keys($fruit);
//
// echo "<pre>";
// print_r($newArray);
// echo "</pre>";

$fruits = [
          "First" => "Banana",
          "Second" => "Apple",
          "Third" => "Avocado",
          "Fourth" => "Orange",
          "Fifth" => "Mango",
        ];

// $newArrays = array_keys($fruits);
// $newArrays = array_key_first($fruits);
// $newArrays = array_key_last($fruits);
// $newArrays = array_key_exists("Thirds", $fruits,);

// echo "<pre>";
// print_r($newArrays);
// echo "</pre>";

$newArrays = key_exists("Fifths", $fruits,);
if($newArrays){
  echo "Key Exists!";
}else{
  echo "Key dos not Exists!";
}



 ?>
