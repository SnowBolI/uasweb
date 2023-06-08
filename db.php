<?php
    session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'php_mysql_crud_sql'
) or die(mysqli_erro($mysqli));

?>
