<?php

$emp = [
  [1,"Mazharul","Eng",5000],
  [2,"Titu","Eng",3500],
];


echo "<table border='2px' cellpadding='5px' cellspacing='0'>";
echo "<tr>
      <th>Employ ID</th>
      <th>Name</th>
      <th>Designation</th>
      <th>Salary</th>
      </tr>";
foreach($emp as list($id,$name,$designation,$salary)){
  echo "<tr> <td>$id</td><td>$name</td><td>$designation</td><td>$salary</td></tr>";
};
echo "</table>";




echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



// multidimensional associativearray in list


$emps = [
      [
        "maths" => 75,
        "english" => 65,
        "bangla" => 70,
        "draw" => 80,
      ],
      [
        "maths" => 85,
        "english" => 75,
        "bangla" => 80,
        "draw" => 90,
      ],
      [
        "maths" => 95,
        "english" => 85,
        "bangla" => 90,
        "draw" => 100,
      ]
];


echo "<table border='2px' cellpadding='5px' cellspacing='0'>";
echo "<tr>
      <th>Maths</th>
      <th>English</th>
      <th>Bangla</th>
      <th>Drawing</th>
      </tr>";
foreach($emps as list("maths" => $maths, "english" => $english, "bangla" => $bangla, "draw" => $draw)){
  echo "<tr> <td>$maths</td><td>$english</td><td>$bangla</td><td>$draw</td></tr>";
};
echo "</table>";






?>
