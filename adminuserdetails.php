<?php
session_start();
include('mainserver.php');


if(strlen($_SESSION['emplogin'])==0)
    {   
header('location:adminlogin.php');
}
else
{	
$sql="SELECT * FROM users";
	$r=mysqli_query($db,$sql);
	
	

?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Page</title>
<link rel="stylesheet" type="text/css" href="mystyle.css"></link>
<style>
body{
	background-color:#ffffcc;
}
.img{
	width:300px;
	float:right;
}
table{
	background-color:white;
}
</style>
</head>

<body>
<br/>
<img src="bmscelogonew.png" >
  
  <div class="topnav">
  <a  href="adminhome.php">Home</a>
   <a  class="active" href="adminuserdetails.php">User List</a>
    <a href="adminalleaves.php">All Leaves</a>
     <a href="adminpendingleaves.php">Pending Leaves</a>
  <a  href="adminapprovedleaves.php">Approved Leaves</a>
    <a   href="admindisapprovedleaves.php">Disapproved Leaves</a>
  
  <a class="z" href="logout.php">Logout</a>
  
  
</div>
<h3>Registered Users Details</h3>


<form action="displayuserdetails.php" method="post" >

 <input type="text" size="15" name="details" placeholder="User Login Id"/> <br/>
 
<input type="submit" value="Search"/> 
 

 </form>



<br/><br/><br/>
<table  border='1' cellpadding='6' width="1100px" align="center" >
 <tr style="background-color:#ccc">
 <th>Sl Number</th>
 <th colspan='2'>Login Id</th>
 <th colspan='3'>First Name</th>
 <th colspan='2'>Last Name</th>
 <th colspan='3'>Email ID</th>
 <th colspan='10'>Phone Number</th>
 
 </tr>
 
 <?php
$cnt=1;

   while($cols=mysqli_fetch_assoc($r)){
	echo "<td>".$cnt."</td>";
	
	echo "<td colspan='2'>".$cols['Loginid']."</td>";
	
	echo "<td colspan='3'>".$cols['First_Name']."</td>";
	
	echo "<td colspan='2'>".$cols['Last_Name']."</td>";
	
	echo "<td colspan='3'>".$cols['Email']."</td>";
	
	echo "<td colspan='10'>".$cols['Phone_Number']."</td>";
	
  
     echo "</tr>";
	$cnt++;
}
?>
</table>
 
</body>
</html>
<?php } ?> 