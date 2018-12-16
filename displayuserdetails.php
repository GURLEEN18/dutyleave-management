<?php
session_start();
include('mainserver.php');


if(strlen($_SESSION['emplogin'])==0)
    {   
header('location:adminlogin.php');
}
else
{	

$rrr=isset($_POST['details'])? $_POST['details'] : ' ';

$kg="SELECT id FROM users where Loginid='$rrr' ";
$q=mysqli_query($db,$kg);

$c=mysqli_fetch_array($q);
$co= $c['id']; 

$sql="SELECT * FROM users where id='$co' ";
$r=mysqli_query($db,$sql);

$sqq="SELECT * FROM tbleaves where empid='$co' ";
$rr=mysqli_query($db,$sqq);
	

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

<br/> <br/> 
<h4> User Details </h4>
<table  border='1' cellpadding='6' width="1100px" align="center" >
 <tr style="background-color:#ccc">
 <th colspan='2'>Login Id</th>
 <th colspan='3'>First Name</th>
 <th colspan='2'>Last Name</th>
 <th colspan='3'>Email ID</th>
 <th colspan='10'>Phone Number</th>
 
 </tr>
 
 <?php

   while($cols=mysqli_fetch_assoc($r)){
	
	echo "<td colspan='2'>".$cols['Loginid']."</td>";
	
	echo "<td colspan='3'>".$cols['First_Name']."</td>";
	
	echo "<td colspan='2'>".$cols['Last_Name']."</td>";
	
	echo "<td colspan='3'>".$cols['Email']."</td>";
	
	echo "<td colspan='10'>".$cols['Phone_Number']."</td>";
	
  
     echo "</tr>";

}
?>
</table>

<br/> <br/>
<br/>

<h4>Leave Details </h4>

<table  border='1' cellpadding='6'  align="center" width="1100px">
 <tr style="background-color:#ccc">
 <th width="50px">Sl No.</th>
 <th colspan='2'>Leave Type</th>
 <th colspan='3' width="80px">From Date</th>
 <th colspan='3' width="80px">To Date</th>
 <th colspan='10' width="130px">Description </th>
 <th colspan='3'>Posting Date</th>
 <th colspan='2'>Status</th>
 </tr>
 
 <?php
$cnt=1;

   while($colss=mysqli_fetch_assoc($rr)){
	echo "<td>".$cnt."</td>";
	
	echo "<td colspan='2'>".$colss['LeaveType']."</td>";
	
	echo "<td colspan='3'>".$colss['FromDate']."</td>";
	
	echo "<td colspan='3'>".$colss['ToDate']."</td>";
	
	echo "<td colspan='10'>".$colss['Description']."</td>";
	
	echo "<td colspan='3'>".$colss['PostingDate']."</td>";
	
	 echo "<td>"; ?>
 
        <?php if(($colss['Status'])==1){ ?>
   
   <span style="color: green">Approved</span>
   
   <?php } if(($colss['Status'])==2) { ?>
   
    <span style="color: red">Not Approved</span>
	
	 <?php } if(($colss['Status'])==0)  { ?>
	 
	 <span style="color: blue">Pending</span>
	 
	 <?php } echo "</td>" ;
   	echo "</tr>";
	$cnt++;
}
	?>


</body>
</html>
<?php } ?> 