<?php
 require_once 'config.php';
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = sha1($_POST['password']);

  $query = $con->prepare("INSERT INTO users (name, email, password) VALUES (?,?,?)");

  $query->bind_param("sss",$name,$email,$password);

  $query->execute();
  
  header("location:login.php");
?>