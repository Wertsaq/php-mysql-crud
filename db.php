<?php
session_start();

$conn = mysqli_connect(
  getenv('DB_HOST'),
  getenv('DB_USER'),
  getenv('DB_PASSWORD'),
  getenv('DB_NAME')
) or die(mysqli_error($mysqli));
?>
