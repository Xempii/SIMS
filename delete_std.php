<?php
$servername = 'localhost';
$username = 'root';
$password = '12345678';
$dbname = 'students';
$id = $_POST['id'];

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM `std_info` WHERE id=$id";

$result = mysqli_query($conn, $sql);

if ($result) {
  echo "success";
} else {
  echo "Error : " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
