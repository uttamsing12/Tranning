<?php
 require 'post_repo.php';
  $repo = new BookRepo;
  $repo->createConnection();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="2" >
	<th>Name</th>
	<th>Email</th>
	<th>Subject</th>
	<th>price</th>
	<th>Action</th>
    <?php 
      $repo->fetchData();
    ?>
</table>
</body>
</html>