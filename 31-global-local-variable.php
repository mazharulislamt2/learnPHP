<?php


// $x = 10;
//
// function test(){
//   global $x;
//   echo "This is Inside value : $x <br>";
// }
//
// test();
// echo "This is Outside value $x";

$x = 10;
$y = 5;
function test(){
  global $x, $y;
  $x = $x + $y;
}

test();
echo $x;







 ?>
