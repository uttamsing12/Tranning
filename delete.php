<?php
 $id =$_GET['id'];
 require 'post_repo.php';
  $repo = new BookRepo;
  $repo->createConnection();
  $repo->delete($id);
  header("location:post_data.php");
?>