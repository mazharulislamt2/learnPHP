<?php
$vegetable = array(
          "1" =>   "Potato",
          "2" =>   "Onion",
          "3" => "Garlic"
);


$fruits = array(
          $vegetable,
          "a" => "Banana",
          "b" => "Apple",
          "c" => "Avocado",
          "d" => "Orange",
          "e" => "Mango",
        );

// array_walk($fruits, "myFunction", "Is Key of");
array_walk_recursive($fruits, "myFunction", "Is Key of");

function myFunction($value, $key, $param){
  echo "$key  $param : $value <br>";
}

 ?>
