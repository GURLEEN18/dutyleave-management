<?php
$errors=array();

$db=mysqli_connect("localhost", "root","","user_registration") or die(mysql_error()); //connect to database


 if (isset($_POST['signin'])) {
   $Loginid= isset($_POST['Loginid'])? $_POST['Loginid']:' ';
  $password = isset($_POST['password']) ? $_POST['password']:' ';

  if (empty($Loginid)) {
  	array_push($errors, "Login id is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  $password = $password;
  	$query = "SELECT * FROM admin WHERE Loginid='$Loginid' AND password='$password'";
  	$results = mysqli_query($db,$query);
	$r=mysqli_fetch_row($results);
	
	if($r)
	{session_start(); 
  	 $_SESSION['emplogin']=$_POST['Loginid'];
	 echo "<script type='text/javascript'> document.location = 'adminhome.php'; </script>";
	 
	}
	else{
 	array_push($errors, "Wrong username or password"); 	  
  	}
  }
}
?>