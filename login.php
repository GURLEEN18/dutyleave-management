<?php
session_start();
error_reporting(0);
 include('mainserver.php');
if (isset($_POST['login'])) {
   $Loginid= isset($_POST['Loginid'])? $_POST['Loginid']:' ';
  $password = isset($_POST['password']) ? $_POST['password']:' ';

  if (empty($Loginid)) {
  	array_push($errors, "Login id is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  $password = md5($password);
  	$query = "SELECT id,Loginid,password FROM users WHERE Loginid='$Loginid' AND password='$password'";
  	$results = mysqli_query($db,$query);
	$r=mysqli_fetch_row($results);
	
	
	if($r)
	{  
foreach ($results as $result) {
    $_SESSION['eid']=$result->id;
  }
          
  	  $_SESSION['username'] = $Loginid;	 
	  
  	 echo "<script type='text/javascript'> document.location = 'userhomepage.php'; </script>";
	}
	else{
 	array_push($errors, "Wrong username or password"); 	  
  	}
  }
}
  ?>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" type="text/css" href="mystyle.css"></link>
<style>
body{
background-image:url("5.png");
 background-color: #cccccc;
 background-repeat: no-repeat;
  background-size:cover;
  position:relative;
}
input[type=text]{
	border: 1px outset grey;
    border-radius: 4px;
	padding: 10px 20px;
	background: #f1f1f1;
}
input[type=password]{
	border: 1px outset grey;
    border-radius: 4px;
	padding: 10px 20px;
	background: #f1f1f1;
}
input[type=submit]{
	width:100%;
	background-color:green;
	color:white;
	border: 1px outset grey;
    border-radius: 4px;
	padding: 10px 20px;
	 cursor: pointer;
}
input[type=submit]:hover {
    background-color: #45a049;
}
button{
   position:absolute;
	width:15%;
	background-color:red;
	color:white;
	border: 1px outset grey;
    border-radius: 4px;
	padding:  11px 20px;
	 cursor: pointer;
	  font-size: 14px;
	  z-index:1;
}
button:hover {
    background-color: #D80000;
}
</style>
</head>

<body>


										 
<form method="post" name="login form" action="login.php">


<a href="welcomepage.php" >
<button type="button">Return to main page</button>
</a>
<a href="adminlogin.php" >
<button type="button" style="position:absolute;right:0px;">Admin Login here</button>
</a>

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
  
  
  
  <div>
 
  
  <table width="350" id="e" align="center" cellpadding="20px"> 
  <tr> <th colspan="2" align="center" height="25px" ><?php include('errors.php'); ?><font size="6">User  Login</font><br/></th></tr>
  
       <tr><td align="left">
        <b>Login Id:</b><br/>
		
	<input type="text" id="Loginid" name="Loginid" required="required" placeholder="Login Id" size="40"/></td></tr>
	
	<tr><td align="left" >
	 <b> Password:</b><br/>
	<input type="password" id="password" name="password" required="required" size="40" placeholder="Password" /></td></tr>

	<tr><td colspan="2" align="center">
	<input type="submit" name="login" value="Sign in"  />
	
	<br/> <br/>
	New user? <a href="register.php"> Click here
	<br/></td></tr></table>
	

	</div>
  
</form>
</body>
</html>
