<?php
if (!isset($_POST["email"]) && !isset($_POST["password"] )) {
	header("location:login.php");
}
    require_once 'config.php';
    $email = $_POST['email'];  
    $password = sha1($_POST['password']);
    $query = $con->prepare("SELECT * FROM  users where email= ? and password = ?");

   $query->bind_param("ss", $email, $password);

   $query->execute();

   $query->bind_result($id, $name, $mail, $pass);
   $query->fetch();
 if (!isset($mail) && !isset($pass)) {
 	header("location:login.php?log=wrong");

 }
 else{
   session_start();
 	$_SESSION["user_id"] = "uttam".$id;
 	header("location:welcome.php");
 }

?>