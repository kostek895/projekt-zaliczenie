<?php
$con=mysqli_connect('zaliczenie-kostka.mysql.database.azure.com','kostka@zaliczenie-kostka','zaq1@WSX','zaliczenie');
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>