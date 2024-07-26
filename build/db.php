<?php
session_start();

$conn = mysqli_connect(
  'db',
  'my_user',
  'my_password',
  'php_mysql_crud'
) or die(mysqli_error($conn)); 

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>
