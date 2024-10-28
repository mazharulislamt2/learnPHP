<?php
$emp = [

  [1, "Mazharul", "Engineer", "22000"],
  [2, "Titu", "HTML", "18000"],
  [3, "Asus", "Laptop", "15000"],
  [4, "Benq", "Monitor", "5000"],
  [5, "Havit", "Monitor", "500"],
];

// echo $emp[0][0] . " ";
// echo $emp[0][1] . " ";
// echo $emp[0][2] . " ";
// echo $emp[0][3] . " ";
// echo "<br>";
// echo $emp[1][0] . " ";
// echo $emp[1][1] . " ";
// echo $emp[1][2] . " ";
// echo $emp[1][3] . " ";


// for($row = 0; $row < 4; $row++){
//   for($col = 0; $col < 4; $col++){
//     echo $emp[$row][$col] . " ";
//   };
//   echo "<br>";
// };

echo "<table border='2px' cellpadding='5px' cellspacing='0' >";
echo "<tr>
      <th>ID</th>
      <th>Name</th>
      <th>Designation</th>
      <th>Payroll </th>
      </tr>";
foreach($emp as $v1) {
  echo "<tr>";
  foreach($v1 as $v2) {
    echo "<td> $v2 </td>";
  };
  echo "</tr>";
};
echo "</table>";


// echo "<pre>";
// print_r($emp);
// echo "</pre>";


?>
