<?php
include('db/connect.php');
session_start();
if(isset($_POST['submit']))
{
 $email=$_POST['email'];
 $password=$_POST['password'];
 if($email!=''&&$password!='')
 {
   $query=mysql_query("select * from registration where email='".$email."' and password='".$password."'") or die(mysql_error());
   $res=mysql_fetch_row($query);
   if($res)
   {
    $_SESSION['email']=$email;
    header('location:index.php');
   }
   else
   {
    echo'You entered username or password is incorrect';
   }
 }
 else
 {
  echo'Enter both username and password';
 }
}
?>
<html>
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style1.css">
</head>
<body>
<div class="pen-title">
  <h1>Decors</h1>
</div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
	<form method="post" action = "#">
      <div class="input-container">
        <input type="#{type}" id="#{label}" required name="email"/>
        <label for="#{label}">Username</label>
        <div class="bar"></div>
      </div>
	  <div class="input-container">
        <input type="password" id="password" required name="password"/>
        <label for="#{label}">Password</label>
        <div class="bar"></div>
      </div>
	  <div class="button-container">
        <button name = "submit"><span>Go</span></button>
      </div>
    </form>
  </div>
</body>
</html>
 

	
	
