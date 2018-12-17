<?php
session_start();
error_reporting(0);
include('adminserver.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Login Page</title>

<style>
<?php include('mystyle.css'); ?>



</style>
</head>

<body class="body">
<form action="adminlogin.php" name="admin login" method="post">



<a href="welcomepage.php" >
<button type="button" class="button">Return to main page</button>
</a>
<a href="login.php" >
<button type="button" style="position:absolute;right:0px;" class="button">Users Login here</button>
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