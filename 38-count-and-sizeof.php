<?php

$sports = array('Football', 'Cricket', 'Hockey', 'Golf', 'Tennis');


// echo count($sports);
// echo sizeof($sports);

$team = array(
            'laliga' => array('Real Madrid', 'Barcelona', 'Savila', 'AT Madris'),
            'epl' => array('United', 'City', 'Arsenal', 'Chelse', 'Wolves'),
);

// echo count($team,1);
// echo count($team['laliga'],1);



// $len = count($sports);
//
// for($i = 0; $i < $len; $i++) {
//   echo $sports[$i] . "<br>";
// }


echo "<pre>";
print_r(array_count_values($sports));
echo "</pre>";

 ?>
