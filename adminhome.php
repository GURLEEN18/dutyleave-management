<?php
session_start();
include('mainserver.php');

if(strlen($_SESSION['emplogin'])==0)
    {   
header('location:adminlogin.php');
}
else
{
	$sql="SELECT MAX(id) as max1 FROM users";
	$query=mysqli_query($db,$sql);
	
	$r="SELECT MAX(id) as mleaves FROM tbleaves";
	$q=mysqli_query($db,$r);
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Page</title>

<style>

<?php include('mystyle2.css'); ?>
.img{
	width:300px;
	float:right;
}
table{
	background-color:white;
}
</style>
</head>

<body >
<br/>
<img src="aditya.png" >
  
  <div class="topnav">
  <a class="active" href="adminhome.php">Home</a>
   <a  href="adminuserdetails.php">Users Info</a>
    <a href="adminalleaves.php">All Leaves</a>
  <a href="adminpendingleaves.php">Pending Leaves</a>
   <a  href="adminapprovedleaves.php">Approved Leaves</a>
    <a   href="admindisapprovedleaves.php">Disapproved Leaves</a>
  <a class="z" href="logout.php">Logout</a>
  
  
</div>

<h2>Dashboard</h2><br/>

<h3>
Welcome to Admin Space
</h3>

<img src="admin1.png" class="img">
<h3> Track Leaves from all your Employees and take necessary action
</h3>
<br/>
  <table cellspacing='10' cellpadding='10' border='5' align="center">
  <caption><font size="5"><b>Live Stats</b></font></caption>
  <tr>
   <th colspan='10'>Total Users Registered</th>
   <th colspan='10'>Total Leaves Applied</th>
   </tr>
   
       <?php  while($cols=mysqli_fetch_assoc($query))
		  {
			  echo "<td colspan=10'>".$cols['max1']."</td>";
		  }
		  while($rows=mysqli_fetch_assoc($q))
		  {
			  	  echo "<td colspan=10'>".$rows['mleaves']."</td>";
		  }
		  echo "<tr>";
		  ?>
		
		  
 
 
</body>
</html>
<?php } ?> 