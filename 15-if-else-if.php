<?php

$per = 132;

if($per >=80 && $per <=100){
  echo "You are in Merit";
}elseif($per >=60 && $per <=80){
  echo "You are 1st Devision";
}elseif($per >=45 && $per <=60){
  echo "You are 2nd Devision";
}elseif($per >=33 && $per <=45){
  echo "You are 3rd Devision";
}elseif($per < 33){
  echo "You are Faill";
}else {
  echo "Please Enter The Valid Number";
}


?>
