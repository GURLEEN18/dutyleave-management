<?php
session_start();
include('mainserver.php');

if(strlen($_SESSION['emplogin'])==0)
    {   
header('location:adminlogin.php');
}
else
{
	
$sql="SELECT users.id,users.First_Name,users.Last_Name,users.Loginid,tbleaves.LeaveType,tbleaves.FromDate,tbleaves.ToDate,tbleaves.Description,tbleaves.PostingDate,tbleaves.Status,tbleaves.empid FROM tbleaves INNER JOIN users on tbleaves.empid=users.id";

 	$r=mysqli_query($db,$sql);
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Page</title>

<style>

<?php include('mystyle2.css'); ?>
</style>
</head>

<body>
<br/>
<img src="aditya.png" >
  
  <div class="topnav">
  <a  href="adminhome.php">Home</a>
   <a  href="adminuserdetails.php">Users Info</a>
    <a class="active" href="adminalleaves.php">All Leaves</a>
  <a href="adminpendingleaves.php">Pending Leaves</a>
   <a  href="adminapprovedleaves.php">Approved Leaves</a>
    <a   href="admindisapprovedleaves.php">Disapproved Leaves</a>
  <a class="z" href="logout.php">Logout</a>
  
  
</div>

<h3>Total Leave History</h3>

<br/><br/><br/><br/><br/>
 <table  border='4' cellpadding='8'  align="center" width="1100px">
 <tr style="background-color:#ccc">
 <th width="50px">Sl No.</th>
 <th colspan='2' width="130px">Student Name</th>
 <th colspan='3'>Login Id</th>
 <th colspan='2'>Leave Type</th>
 <th colspan='3' width="80px">From Date</th>
 <th colspan='3' width="80px">To Date</th>
 <th colspan='10' width="130px">Description </th>
 <th colspan='3'>Posting Date</th>
 <th colspan='2'>Status</th>
 </tr>
 
 <?php
$cnt=1;

   while($cols=mysqli_fetch_assoc($r)){
	echo "<td>".$cnt."</td>";

	echo "<td colspan='2'>".$cols['First_Name']."  ".$cols['Last_Name']."</td>";
	
	echo "<td colspan='3'>".$cols['Loginid']."</td>";
	
	echo "<td colspan='2'>".$cols['LeaveType']."</td>";
	
	echo "<td colspan='3'>".$cols['FromDate']."</td>";
	
	echo "<td colspan='3'>".$cols['ToDate']."</td>";
	
	echo "<td colspan='10'>".$cols['Description']."</td>";
	
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

 
 </table>
</body>
</html>
<?php } ?> 