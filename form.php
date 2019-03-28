<!DOCTYPE html>
<html>
<head>
	<title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script
	</title>
</head>   
<body>
  <form action="create.php" method="post">
  <table>
     <tr>
      <td> Enter your name :-</td>
      <td><input type="text" name="name" required=""><td>
    </tr>
    <tr>
      <td> Enter your email :-</td>
      <td><input type="email" name="email" required=""><td>
    </tr>
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