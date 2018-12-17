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

$sql="SELECT id FROM users WHERE Loginid='$eid' ";
				$result=mysqli_query($db,$sql);
				$rows=mysqli_fetch_assoc($result);
				
				$query="SELECT LeaveType,FromDate,ToDate,Description,PostingDate,Status FROM tbleaves WHERE empid='$rows[id]' ";
	
	$r=mysqli_query($db,$query);
	?>

<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>

<style>

<?php include('mystyle2.css'); ?>

</style>
</head>


<body>
<br/>
  <img src="aditya.png" >
  
  <div class="topnav">
  <a  href="userhomepage.php">Home</a>
  <a href="applyleave.php">Leave Request</a>
  <a  class="active" href="leavehistory.php">Leave History</a>

  <a class="z" href="logout.php">Logout</a>
</div>


<form id="leavehistory" method="post" action="leavehistory.php">
<h3> <b> LEAVE HISTORY</b> </h3>

</br></br></br></br>
<table border='5' width="1000" cellpadding="10" cellspacing="1" align="center">


<tr style="background-color:#ccc"> 
<th>Sl Number</th>
<th colspan='2'>Leave Type</th>
<th colspan='5'>From Date </th>
<th colspan='3'>To Date</th>
<th colspan='25'>Description</th> 
<th colspan='3'>Posting Date</th> 
<th>Status</th> 
</tr>

<?php
$cnt=1;

while($cols=mysqli_fetch_assoc($r)){
	echo "<td>".$cnt."</td>";
	
	echo "<td colspan='2'>".$cols['LeaveType']."</td>";
	
	echo "<td  colspan='3'>".$cols['FromDate']."</td>";
	
	echo "<td colspan='5'>".$cols['ToDate']."</td>";
	
	echo "<td  colspan='25'>".$cols['Description']."</td>";
	
	echo "<td colspan='3'>".$cols['PostingDate']."</td>";
	
   echo "<td>"; ?>
   
   <?php if(($cols['Status'])==1){ ?>
   
   <span style="color: green">Approved</span>
   
   <?php } if(($cols['Status'])==2) { ?>
   
    <span style="color: red">Not Approved</span>
	
	 <?php } if(($cols['Status'])==0)  { ?>
	 
	 <span style="color: blue">Pending</span>
	 
	 <?php } echo "</td>" ;
   	echo "</tr>";
	$cnt++;
}
	?>
  
</body>
</html>
<?php } ?>