<?php

// $fruit = array("Banana", "Apple", "Avocado", "Orange", "Mango");
// $vegetable = ["Potato", "Onion", "Garlic"];

$fruit = array(
          "b" => "Banana",
          "a" => "Apple",
          "e" => "Avocado",
          "c" => "Orange",
          "d" => "Mango",
        );

// $array1 = array("img12.png", "img2.png", "img3.png", "img5.png", "img7.png",);
// $array1 = array("Img12.png", "Img2.png", "img3.png", "img5.png", "img7.png",);


// sort($fruit);
// rsort($fruit);
// asort($fruit);
// arsort($fruit);
// ksort($fruit);
// krsort($fruit);
// natsort($array1);
// natcasesort($array1);

// array_multisort($fruit, $vegetable);

$newArray = array_reverse($fruit);



echo "<pre>";
print_r($newArray);
echo "</pre>";

// echo "<pre>";
// print_r($vegetable);
// echo "</pre>";

 ?>
