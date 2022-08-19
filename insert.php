<?php
error_reporting(0);
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = "INSERT INTO  ajax_ed(name, email, phone, subject, message)
values ('$name','$email','$phone','$subject','$message')";

if ($conn->query($sql) === TRUE) {
  header("Location:login.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  
?>