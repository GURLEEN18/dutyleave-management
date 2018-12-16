<?php include('mainserver.php');

session_start();
$Loginid="";
$First_Name="";
$Last_Name="";
$Phone_Number="";
$Email="";

if(isset($_POST['register'])) {
    $Loginid = isset($_POST['Loginid'])? $_POST['Loginid']:' ';
	$First_Name = isset($_POST['First_Name'])? $_POST['First_Name']:' ';
	$Last_Name = isset($_POST['Last_Name'])? $_POST['Last_Name']:' ';
	$Email= isset($_POST['Email'])? $_POST['Email']:' ';
	$Phone_Number = isset($_POST['Phone_Number'])? $_POST['Phone_Number']:' ';
	$password_1= isset($_POST['password_1'])? $_POST['password_1']:' ';
	$password_2= isset($_POST['password_2'])? $_POST['password_2']:' ';
	 
	 //ensuring of form fields
	  if(empty($Loginid)){array_push($errors,"LoginId is required"); }
	 if(empty($First_Name)){array_push($errors,"First Name is required"); }
	 
	 if(empty($Last_Name)){ 
	 array_push($errors,"Last Name is required");}
	 
	 if(empty($Phone_Number)) { array_push($errors,"Phone Number is required");}
	 
	 if(empty($Email)){array_push($errors,"Email Id is required"); }
	 
	 if(empty($password_1)){	 array_push($errors,"Password is required");}
	 
	 if(empty($password_2)){	 array_push($errors,"Confirm Password");}
	
	 if($password_1 != $password_2){ array_push($errors,"The passwords do not match.Please re-enter"); }
	 //for no errors condition save user in database
	 
	 $user_check_query = "SELECT * FROM users WHERE Loginid='$Loginid' OR Email='$Email'";
	 
  $res = mysqli_query($db, $user_check_query);
  
    if (mysqli_num_rows($res) > 0) {
        // output data of each row
        $row = mysqli_fetch_assoc($res);
        if ($Loginid=$row['Loginid'])
        {
             array_push($errors,"LoginId already exits");
        }
        elseif($Email==$row['Email']) // change it to just else
        {
            array_push($errors,"Email Id already exists");
        }
 
  }
	 if(count($errors)==0)
	 {
		 $password = md5($password_1);
		 $query="INSERT INTO users(Loginid,First_Name,Last_Name,Email,Phone_Number, password)
		 VALUES('$Loginid','$First_Name','$Last_Name','$Email','$Phone_Number', '$password')";
		 
		mysqli_query($db,$query);
		
		 echo "<script type='text/javascript'> alert('You are now registered successfully.Please login to continue'); </script>";
		 
		  $_SESSION['Loginid']=$Loginid;
		  $_SESSION['success']="You are now registered.";
		  
		
          
 		  	echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
				

	 }
}	 
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="mystyle.css"></link>
<style>
body{
background-image:url("1.jpg");
 background-color: #cccccc;
 background-repeat: no-repeat;
  background-size:cover;
}

input[type=text]{
    background: #f1f1f1;
	border: 1px outset grey;
    border-radius: 4px;
	padding: 8px 14px;
}	
input[type=email]{
    background: #f1f1f1;
	border: 1px outset grey;
    border-radius: 4px;
	padding: 8px 14px;
}		

input[type=password]{ 
	background: #f1f1f1;
	border: 1px outset grey;
    border-radius: 4px;
	padding: 8px 14px;
}

input[type=submit]{
	width:45%;
	background-color:green;
	color:white;
	border: 1px outset grey;
    border-radius: 4px;
	padding: 7px 10px;
	 cursor: pointer;
}
input[type=submit]:hover {
    background-color: #45a049;
}

input[type=reset]{
	width:45%;
	background-color:green;
	color:white;
	border: 1px outset grey;
    border-radius: 4px;
	padding: 7px 10px;
	 cursor: pointer;
}
input[type=reset]:hover {
    background-color: #45a049;
}

button{
	width:15%;
	background-color:red;
	color:white;
	border: 1px outset grey;
    border-radius: 4px;
	padding:  13px 22px;
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
<form id="form1" method="post" action="register.php" >

<a href="welcomepage.php" >
<button type="button" id="b6">Return to main page</button>
</a>
<br/><br/><br/><br/>

 
 <table width="650" id="h" align="center" cellpadding="5px" ><tr><th colspan="2" height="5" align="left" class="t1"><?php include('errors.php'); ?><br/><font size="6">Create your account</font><br/><br/></th></tr>

   <tr><td colspan="2"><br/> 
   <b>Login Id:</b><br/>
	<input type="text" name="Loginid" id="lid" placeholder="Login Id" size="30" required="required"  value="<?php echo $Loginid; ?>" >
	<br/><br/></td></tr>
	
       <tr><td>
	  <b>First Name:</b><br/>
	<input type="text" name="First_Name" id="fn" size="30" placeholder="Your first name"  required="required"  value="<?php echo $First_Name; ?>" ><br/><br/></td>
	
	<td>
	 <b>Last Name:</b><br/>
	<input type="text" name="Last_Name" id="ln" size="30" placeholder="Your last name" required="required" value="<?php echo $Last_Name; ?>" ><br/><br/></td></tr>
	
	<tr><td colspan="2"> 
	<b>Email Id:</b><br/>
	<input type="email" id="eid" name="Email" size="30" placeholder="Your email id" required="required" maxlength="100" value="<?php echo $Email; ?>" ><br/><br/></td></tr>
	
	<tr><td colspan="2">
	<b>Phone No.:</b><br/>
	<input type="text" name="Phone_Number" id="pn"  size="30" placeholder="Enter 10 digit no." required="required" value="<?php echo $Phone_Number; ?>"  ><br/><br/></td></tr>
	
	<tr><td>
	<b>Password:</b><br/>
	<input type="password" name="password_1"  required="required" id="pwd1" size="30" placeholder="Password"  value="<?php echo $Password1; ?>" ><br/><br/></td>
	
	<td>
	<b>Confirm Password:</b><br/>
	<input type="password" name="password_2" required="required" id="pwd2" size="30" placeholder="Confirm Password" value="<?php echo $Password2; ?>" /><br/><br/></td></tr>
	
	<tr><td colspan="2" align="center">
	<input type="submit" name="register" value="Register">
    <input type="reset" value="Reset"  />
	<br/>
	 Already a member? <a href="login.php">Login</a><br/><br/></td></tr>
	 </table>
	
	


</form>
</body>
</html>
