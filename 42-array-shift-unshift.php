<?php

$fruit = ["Banana", "Apple", "Avocado", "Orange", "Mango"];

array_shift($fruit);

echo "<pre>";
print_r($fruit);
echo "</pre>";


$fruits = ["Banana", "Apple", "Avocado", "Orange", "Mango"];

array_unshift($fruits, "Cherry", "Berry", "Lemon");

echo "<pre>";
print_r($fruits);
echo "</pre>";

?>
