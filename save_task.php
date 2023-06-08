<?php
session_start();
include('db.php');

if (isset($_POST['save_task'])) {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $query = "INSERT INTO task (title, description, price) VALUES ('$title', '$description', '$price')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Barang Berhasil Ditambah';
  $_SESSION['message_type'] = 'success';
  header('Location: home.php');

}

?>
