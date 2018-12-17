<?php
session_start();
include('mainserver.php');

if(strlen($_SESSION['username'])==0)
    {   
header('location:login.php');
}
else
{
	$eid=$_SESSION['username'];
	$sql="SELECT Loginid,First_Name,Last_Name,Email,Phone_Number FROM users WHERE Loginid='$eid' ";
	$result=mysqli_query($db,$sql);
	?>

<!DOCTYPE html>
<html>
<head>
<title>User Home Page</title>

<style>

<?php include('mystyle2.css'); ?>
table{
	font-size:13pt;
	border-width:0px;
	background-color:#ffffcc;
}
.img{
	float:right;
	width:350px;
	height:400px;
	z-index:1;
	opacity:0.7;
}
</style>
</head>


<body>
<br/>
  <img src="aditya.png" >
  <div class="topnav">
  <a class="active" href="userhomepage.php">Home</a>
  <a href="applyleave.php">Leave Request</a>
  <a href="leavehistory.php">Leave History</a>

  <a class="z" href="logout.php">Logout</a>
</div>
<br/>
<form id="updateform" method="post" action="userhomepage.php">
<h2><b> USER DETAILS </b></h2>
<img src="download.png" class="img">
</br></br></br>
<table width="1100" cellpadding="10" cellspacing="1" align="center"  >


<tr> 
<th align="left" >Login Id</th>
<th align="left">First Name</th>
<th align="left"> Last Name </th>
<th align="left">Email Id </th>
<th align="left">Phone Number</th> 
</tr>
<?php
while($rows=mysqli_fetch_assoc($result)){
	echo "<tr>";
	
	echo "<td>".$rows['Loginid']."</td >";
	
	echo "<td>".$rows['First_Name']."</td>";
	
	echo "<td>".$rows['Last_Name']."</td>";
	
	echo "<td>".$rows['Email']."</td>";
	
	echo "<td>".$rows['Phone_Number']."</td>";
	
	
	echo "</tr>";
	
}

			
         ?>                                               


</table>

</body>
</html>
<?php } ?>