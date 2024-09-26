<?php
session_start();

$DB_HOST = getenv('DB_HOST');
$DB_USER = getenv('DB_USER');
$DB_PASSWORD = getenv('DB_PASSWORD');
$DB_NAME = getenv('DB_NAME');

$conn = mysqli_connect(
  $DB_HOST,
  $DB_USER,
  $DB_PASSWORD,
  $DB_NAME
) or die(mysqli_error($mysqli));

?>
