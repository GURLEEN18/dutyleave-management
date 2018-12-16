<?php
session_start();
error_reporting(0);
include('adminserver.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Login Page</title>
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

<body >
<form action="adminlogin.php" name="admin login" method="post">



<a href="welcomepage.php" >
<button type="button">Return to main page</button>
</a>
<a href="login.php" >
<button type="button" style="position:absolute;right:0px;">Users Login here</button>
</a>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
  
 
  <div >
 
  <table width="350" id="e" align="center" cellpadding="20px"><tr><th colspan="2" align="center" height="25px" ><?php include('errors.php'); ?>
  <font size="6">Admin Login</font><br/></th></tr>
  <tr><td align="left" >
        <b>LoginId:</b><br/>
	<input type="text" name="Loginid" required="required" size="40"  placeholder="Login Id" /></td></tr>
	<tr><td align="left" >
	 <b> Password:</b><br/>
	<input type="password" name="password" required="required" size="40"  placeholder="Password"/></td></tr>
	
	<tr><td colspan="2" align="center">
	<input type="submit" value="Sign in" name="signin"  />
	<br/></td></tr></table>
	

	</div>
	
  
</form>
</body>
</html>