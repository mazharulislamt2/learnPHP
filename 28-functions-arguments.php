<?php
// by value

// function testing($string) {
//   $string .= " and something extra.";
// }
//
// $str = "This is string";
//
// testing($str);
// echo $str;


// by reference

// function testing(&$string) {
//   $string .= " and something extra.";
// }
//
// $str = "This is string";
//
// testing($str);
// echo $str;


// by value

function first($num){
  $num += 5;
}

// by reference

function second(&$num) {
  $num += 7;
}


$number = 10;
first($number);
echo "Original Value is $number<br>";

second($number);
echo "Original Value is $number<br>";







?>
