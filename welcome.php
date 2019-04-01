<?php
session_start();
if (!isset($_SESSION["user_id"])) {
	header("location:login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3> Welcome ! you are login</h3>
</body>
</html>