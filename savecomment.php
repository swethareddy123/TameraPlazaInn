<?php

	$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("booking", $con);

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];	
	//echo "INSERT INTO comment (name, email, content) VALUES('$name','$email','$message')";
	//exit;
    $sql="INSERT INTO comment (name, email, content) VALUES('$name','$email','$message')";
  header("location: index.php#3");
mysql_close($con)

	
?>


