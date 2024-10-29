<?php


$fruit = ["a"=> "Banana", "b"=> "Mango", "c"=> "Banana", "d"=> "Apple"];


// $newArray = array_values($a1);
$newArray = array_unique($fruit);


echo "<pre>";
print_r($newArray);
echo "</pre>";

 ?>
