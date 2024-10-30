<?php

$fruit = array("Banana", "Apple", "Avocado", "Orange", "Mango");

echo "<b>Current :<b>" . current($fruit) . "<br>";
echo "<b>Key :<b>" . key($fruit) . "<br>";
echo "<b>Pos :<b>" . pos($fruit) . "<br>";

echo "<br>";

next($fruit);
echo "<b>Current :<b>" . current($fruit) . "<br>";

echo "<br>";

next($fruit);
echo "<b>Current :<b>" . current($fruit) . "<br>";

echo "<br>";

next($fruit);
echo "<b>Current :<b>" . current($fruit) . "<br>";

echo "<br>";

prev($fruit);
echo "<b>Current :<b>" . current($fruit) . "<br>";

echo "<br>";

end($fruit);
echo "<b>Current :<b>" . current($fruit) . "<br>";
echo "<b>Key :<b>" . key($fruit) . "<br>";

echo "<br>";

echo "<pre>";
foreach ($fruit as $key => $value) {
    print_r([$key, $value]);
}
echo "</pre>";

echo "<br>";

reset($fruit);
echo "<b>Current :<b>" . current($fruit) . "<br>";
 ?>
