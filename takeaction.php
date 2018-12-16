<?php

include('mainserver.php');

if(isset($_POST['approve']))
{
         
	
	$sql="UPDATE tbleaves SET Status=1 WHERE id='$var'";
	$r=mysqli_query($db,$sql);
	
	if($r)
	{
		echo "<script type='text/javascript'> alert('Leave Status Updated Succesfully.'); </script>";
			echo "<script type='text/javascript'> document.location = 'adminalleaves.php'; </script>";
	
}
}

if(isset($_POST['disapprove']))
{
	$sql="UPDATE tbleaves SET Status=2 WHERE id='$var'";
	$r=mysqli_query($db,$sql);
	
	if($r){
		echo "<script type='text/javascript'> alert('Leave Status Updated Succesfully.'); </script>";
			echo "<script type='text/javascript'> document.location = 'adminalleaves.php'; </script>";
	}
}