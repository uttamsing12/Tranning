<?php
  $FirstNum  = $_POST["first_num"];
  $SecondNum = $_POST["second_num"];
  $ThirdNum  = $_POST["third_num"];
  $FourthNum = $_POST["fourth_num"];
  $FivethNum = $_POST["fiveth_num"];

  $num = array("$FirstNum", "$SecondNum", "$ThirdNum", "$FourthNum", "$FivethNum");
   sort($num);
   echo "<h3> This ascending order number <h3>";
  foreach ($num as $AscArray) {
  	echo $AscArray.",";
  }

   rsort($num);
   echo "<h3> This desending order number <h3>";
  foreach ($num as $DesArray) {
  	echo $DesArray.",";
  }
?>