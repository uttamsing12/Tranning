<?php
 if (!isset($_POST["f_num"]) || !isset($_POST["s_num"])) {
 	header("location:input.html");
 }
 else{
 $num1=$_POST["f_num"];
 $num2=$_POST["s_num"];
 $op=$_POST["op"];
 $res;
	
 if ($op=="add") {
 	$res=$num1+$num2;
 }
 else{
 $res=$num1-$num2;
 }
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
</head>
<body>
<?php echo "<h3>Result is $res</h3> ";  ?>
<p>For go back to input page <a href="input.html">click</a> here</p>
</body>
</html>