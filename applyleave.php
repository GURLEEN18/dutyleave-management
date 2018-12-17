
<?php
session_start();
error_reporting(0);
include('mainserver.php');

    $LeaveType="";
	$FromDate="";
	$ToDate="";
	$Description="";
	$Status=0;
	$eid=$_SESSION['username'];
	
if(strlen($_SESSION['username'])==0)
    {   
header('location:login.php');
}
else{
	
 if (isset($_POST['Apply'])) {
	
   $LeaveType= isset($_POST['LeaveType'])? $_POST['LeaveType']:' ';
  $FromDate = isset($_POST['FromDate']) ? $_POST['FromDate']:' ';
  $ToDate = isset($_POST['ToDate']) ? $_POST['ToDate']:' ';
  $Description = isset($_POST['Description']) ? $_POST['Description']:' ';
  

  if (empty($LeaveType)) {
  	array_push($errors, "Leave Type is required");
  }
  if (empty($FromDate)) {
  	array_push($errors, "From Date is required");
  }
  if (empty($ToDate)) {
  	array_push($errors, "To Date is required");
  }
  if (empty($Description)) {
  	array_push($errors, "Description is required");
  }
  
  if($FromDate > $ToDate){
                array_push($errors, "To Date should be greater than From Date");
           }
		   
		    if (count($errors) == 0)
			{
				$sql="SELECT id FROM users WHERE Loginid='$eid' ";
				$result=mysqli_query($db,$sql);
				$rows=mysqli_fetch_assoc($result);
				
				$query="INSERT INTO tbleaves(LeaveType,FromDate,ToDate,Description,Status,empid) 
				VALUES('$LeaveType','$FromDate','$ToDate','$Description','$Status','$rows[id]')";
				
				mysqli_query($db,$query);
				
				echo "<script type='text/javascript'>alert('Leave Applied Successfully.');</script>";
				
			echo "<script type='text/javascript'> document.location = 'applyleave.php'; </script>";
				
			}
 }
				
  
  ?>


<!DOCTYPE html>
<html>
<head>
<title>Leave request</title>

<script>
function TDate() {
    var UserDate = document.getElementById("userdate").value;
    var ToDate = new Date();

    if (new Date(UserDate).getTime() < ToDate.getTime()) {
          alert("The Date must be Bigger or Equal to today date");
          return false;
     }
    return true;
}
</script>
<style>

<?php include('mystyle2.css'); ?>
</style>
</head>


<body>
<br/>
  <img src="aditya.png" >
  
  
   <div class="topnav">
  <a  href="userhomepage.php">Home</a>
  <a class="active" href="applyleave.php">Leave Request</a>
  <a href="leavehistory.php">Leave History</a>
  <a class="z" href="logout.php">Logout</a>
</div>
<br/><br/><br/><br/>
 


<form id="leaveform" method="post" action="applyleave.php" name="Apply leave">



<table  class="t" align="center"   width="900">
<tr>
<th colspan="2"  bgcolor="yellow" height="45" class="t1"><font size="5">Leave  Request  Form</font></th></tr>



<tr>
<td class="t3"><?php include('errors.php'); ?>
<br/>

<b>Type of Leave:</b><select name="LeaveType">
<option>Select Leave Type</option>

<option>Study Leave</option>
<option>Sick Leave</option>
<option>Personal Leave</option>
</select><br/><br/>
</td></tr>
<tr><td class="5"><br/>
<b>From date: <input  type="date" size="10" name="FromDate" placeholder="dd/mm/yyyy" id="userdate" onchange="TDate()" required />


<br/><br/></td>

<td  class="6">
<b>To date: <input type="date" size="10" name="ToDate" placeholder="dd/mm/yyyy" id="userdate" onchange="TDate()" required />

</td></tr>


<tr><td class="7" colspan="2"><br/>
<b>Description:</b><br/><textarea name="Description" rows="4" cols="110" >

</textarea><br/><br/>

<input type="submit" name="Apply" value="Apply"/><br/><br/>

</td>

</tr>
</table>
</form>
</body>
</html>
<?php } ?> 