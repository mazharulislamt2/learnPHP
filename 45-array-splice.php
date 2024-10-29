<?php

$fruit = ["Banana", "Apple", "Avocado", "Orange", "Mango"];

$old = ["Cherry", "Berry"];

// array_splice($fruit, 1,2, $old);
// array_splice($fruit, 1, count($fruit), $old);
// array_splice($fruit, 0, 0, $old);
array_splice($fruit, count($fruit), 0, $old);

echo "<pre>";
print_r($fruit);
echo "</pre>";


 ?>
