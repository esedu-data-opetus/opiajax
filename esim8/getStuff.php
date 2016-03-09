<?php
$csvData = file_get_contents("vieraskirja.html");
$rows = str_getcsv($csvData,PHP_EOL);
echo '<table border="1">';
foreach($rows as $row) {
  $rowData = str_getcsv($row,";");
  echo '<tr>';
  foreach($rowData as $data) {
    echo '<td>' . $data . '</td>';
  }
  echo '</tr>';
}
echo '</table>';

 ?>
