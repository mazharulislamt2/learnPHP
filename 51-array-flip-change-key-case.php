<?php

$a = array (
  "TITU" => 30,
  "Asus" => 70,
  "Benq" => 5,
);

// $newArray = array_flip($a);

// $newArray = array_change_key_case($a, CASE_UPPER);
$newArray = array_change_key_case($a, CASE_LOWER);

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>
