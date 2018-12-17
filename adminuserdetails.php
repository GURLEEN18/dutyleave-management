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

<style>

<?php include('mystyle2.css'); ?>

input[type=submit]{
	width:4%;
	background-color:blue;
	color:white;
	border: 1px outset grey;
    border-radius: 4px;
	padding: 2px 2px;
	 cursor: pointer;
}
input[type=submit]:hover {
    background-color: #3366cc;
}

</style>
</head>

<body>
<br/>
<img src="aditya.png" />
  
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
Search for a particular student:
 <input type="text" size="15" name="details" placeholder="User Login Id"/>
 
<input type="submit" value="Search"/> 
 

 </form>



<br/><br/><br/>
<table  border='4' cellpadding='8' width="1100px" align="center" >
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