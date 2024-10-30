<?php

function myFunction($n, $m) {
 return $n . "-" . $m;
}

$fruit = ["Banana", "Apple", "Avocado", "Orange", "Mango"];

$newArray = array_reduce($fruit, 'myFunction', 'lemon');



echo "<pre>";
print_r($newArray);
echo "</pre>";

 ?>
