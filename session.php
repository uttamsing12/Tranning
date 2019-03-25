<?php
   $name = "uttam singh";
 session_start();
  $_SESSION["user_name"] =  $name;
  $cookie_name = "user";

  setcookie($cookie_name, $name, time() + (60 *5));

?>