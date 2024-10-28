<?php

$marks = [
      "Mazharul" => [
        "maths" => 75,
        "english" => 65,
        "bangla" => 70,
      ],
      "Asus" => [
        "maths" => 85,
        "english" => 75,
        "bangla" => 80,
      ],
      "Benq" => [
        "maths" => 95,
        "english" => 85,
        "bangla" => 90,
      ]
];

echo "<table border='2px' cellpadding='5px' cellspacing='0'>";
echo "<tr>
      <th>Student Name</th>
      <th>Maths</th>
      <th>English</th>
      <th>Bangla</th>
      </tr>";
foreach($marks as $key => $v1) {
  echo "<tr>
        <td>$key</td>";
  foreach($v1 as $v2){
    echo "<td>$v2</td>";
  }
  echo "</tr>";
}
echo "</table>";

echo "<pre>";
print_r($marks);
echo "</pre>";

?>
