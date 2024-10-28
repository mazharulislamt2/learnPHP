<?php

// $colors = array("red", "20", "green", 12.313);

// echo $colors[0]."<br>";
// echo $colors[1]."<br>";
// echo $colors[2]."<br>";
// echo $colors[3];

// echo  "<pre>";
// print_r($colors);
// echo  "</pre>";


$colors = array("red", "20", "green", 12.313);

echo "<ul>";
for ($i = 0; $i < 4; $i++){
  echo "<li> $colors[$i] </li>";
}
echo "</ul>";
 ?>
