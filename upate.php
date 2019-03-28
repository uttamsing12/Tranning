
<?php
$id =$_GET['id'];
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
	<form action="create.php" method="post">
  <table>
    <tr>
      <td> Enter subject name</td>
      <td><input type="text" name="subject" required=""><td>
    </tr>
    <tr>
      <td> Enter subject price</td>
      <td><input type="text" name="price" required=""></td>
    </tr>
    <tr><td><input type="submit" name="" value="submit"></td></tr>
  </table>
</form>
 
</body>
</html>