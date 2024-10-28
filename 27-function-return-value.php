<?php

// function hello($fname="First", $lname="Last") {
//   $v = "$fname $lname";
//   return $v;
// }
// echo hello("New", "Bangladesh 2.0");

// function hello($fname="First", $lname="Last") {
//   $v = "$fname $lname";
//   return $v;
// }
// $name =  hello("New", "Bangladesh 2.0");
//
// echo "Hello $name Dhaka";


function sum($math, $eng, $gsc) {
  $s = $math + $eng + $gsc;

  return $s;
}

function percentage($st) {
  $per = $st / 3;

  echo $per . "%";
}

$total = sum(50,80,70);

percentage($total);
// echo $total;







?>
