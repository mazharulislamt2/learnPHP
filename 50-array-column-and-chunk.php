<?php

$array = array(
      array(
        'id' => '2023',
        'first_name' => 'Salman',
        'last_name' => 'Khan',
      ),
      array(
        'id' => '2024',
        'first_name' => 'Mazharul',
        'last_name' => 'Islam',
      ),
      array(
        'id' => '2025',
        'first_name' => 'Asus',
        'last_name' => 'Benq',
      ),
);

$newArray = array_column($array, 'last_name','id');

echo "<pre>";
print_r($newArray);
echo "</pre>";


// $fruit = ["Banana", "Apple", "Avocado", "Orange", "Mango"];

// $newArrays = array_chunk($fruit, 3);

$age = array(
            "Mazharul" => "32",
            "Islam" => "33",
            "Titu" => "34",
            "Sheikh" => "35",
);

$newArrays = array_chunk($age, 2, true);

echo "<pre>";
print_r($newArrays);
echo "</pre>";

 ?>
