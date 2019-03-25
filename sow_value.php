<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
   <h3>This is session value-</h3>
    <?php 
     session_start();
     echo "Usre name is ".$_SESSION["user_name"];
     ?>

     <h3>This is cookie  value-</h3>
    <?php 
     
    //echo "Usre name is ".$_COOKIE[""];
     ?>
</body>
</html>