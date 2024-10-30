<?php
function square($n, $m) {
  return [$n => $m];
}


$a = [1,2,3,4,5,];
$b = ["Banana", "Apple", "Avocado", "Orange", "Mango"];

$newArray = array_map('square', $a, $b);

echo "<pre>";
print_r($newArray);
echo "</pre>";




 ?>
