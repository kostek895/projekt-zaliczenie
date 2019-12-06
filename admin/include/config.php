<?php
$con=mysqli_connect('zaliczenie-kostka.mysql.database.azure.com','kostka@zaliczenie-kostka','zaq1@WSX','zaliczenie');
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
} else {
	echo "Wszystko git";
}
?>