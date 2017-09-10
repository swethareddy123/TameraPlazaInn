<?php
include('db/connect.php');
// define variables and set to empty values
$fnameErr = $lnameErr  = $numErr = $emailErr = $passwordErr = $websiteErr = $FstnameErr= $LstnameErr ="";
$fname = $lname = $gender = $num =  $comment = $email = $password = $website =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
  if (empty($_POST["fname"])) {
    $FstnameErr = " First Name is required";
	$e1='yes';
	  } else {
    $fstname = test_input($_POST["fname"]);
	$e1='no';
  }
  
  if (empty($_POST["lname"])) {
    $LstnameErr = " Last Name is required";
	$e2='yes';
  } else {
    $lstname = test_input($_POST["lname"]);
	$e2='no';
  }
  
  
  if (empty($_POST["num"])) {
    $numErr = "Contact number is required";
	$e3='yes';
  } else {
    $num = test_input($_POST["num"]);
	$e3='no';
  }
    
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
	$e4='yes';
  } else {
    $email = test_input($_POST["email"]);
	$e4='no';
  }
   if (empty($_POST["password"])) {
    $passwordErr = "password is required";
	$e5='yes';
  } else {
    $password = test_input($_POST["password"]);
	$e5='no';
  }
    
  

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }


if($e1=='no' && $e2=='no' && $e3=='no' && $e4=='no' && $e5=='no'){
	mysql_query('INSERT INTO `registration` (`fst_name`, `lst_name`,`contact_num`,`email`,`password`)
	 VALUES ("'.$fstname.'", "'.$lstname.'", "'.$num.'","'.$email.'", "'.$password.'")');
	//echo 'INSERT INTO `registration` (`fst_name`, `lst_name`,`contact_num`,`email`,`password`)
	 //VALUES ("'.$fstname.'", "'.$lstname.'", "'.$num.'","'.$email.'","'.$password.'")';
	 //exit;
header('Location: index1.php?msg=s');
}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<html>

<head>
  <meta charset="UTF-8">
  <title>Register Form</title>
  
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
  <h1 class="title">REGISTER</h1>
<?php
if(isset($_GET['msg'])){
echo "<h3 style='color:red;'>Inserted Successfully</h3>";
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 <div class="input-container">
        <input type="#{type}" id="#{label}" required name="fname"/>
        <label for="#{label}">Firstname</label>
		<span class="error">* <?php echo $FstnameErr;?></span>
        <div class="bar"></div>
  </div>
  <div class="input-container">
        <input type="#{type}" id="#{label}" required name="lname"/>
        <label for="#{label}">Lastname</label>
		<span class="error">* <?php echo $LstnameErr;?></span>
        <div class="bar"></div>
  </div>
  <div class="input-container">
        <input type="#{type}" id="#{label}" required name="num"/>
        <label for="#{label}">Contact Number</label>
		<span class="error">* <?php echo $numErr;?></span>
        <div class="bar"></div>
  </div>
   <div class="input-container">
        <input type="#{type}" id="#{label}" required name="email"/>
        <label for="#{label}">Email</label>
		<span class="error">* <?php echo $emailErr;?></span>
        <div class="bar"></div>
  </div>
  <div class="input-container">
        <input type="password" id="password" required name="password"/>
        <label for="#{label}">Password</label>
		<span class="error">* <?php echo $passwordErr;?></span>
        <div class="bar"></div>
  </div>
 
  
  
 
  
  
  <p><span class="error">* required field.</span></p>

   <div class="button-container">
        <button name = "submit"><span>Go</span></button>
      </div>
    </form>
  </div>
</form>



</body>
</html>
