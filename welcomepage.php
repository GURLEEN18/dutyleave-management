<?php

session_start();
error_reporting(0);
include('server.php')
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" >

<head>
<title>Welcome Page</title>

<script>

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        document.getElementById("myBtn").style.display = "block";
		document.getElementById("div4").style.top = "0";
    } else {
        document.getElementById("myBtn").style.display = "none";
		document.getElementById("div4").style.top = "-120px";
    }
}


function topFunction() {
    
    document.documentElement.scrollTop = 0; 
}


</script>
<style>
<?php include('mystyle.css'); ?>
html{
	scroll-behavior: smooth;
}
body{
	height:100%;
	margin:0px;
	
}

table{
border-bottom-width:2px;
border-bottom-style:solid;
border-bottom-color:black;
}
tr{
vertical-align:bottom;
}


button{

	width:10%;
	background-color:red;
	color:white;
	border: 1px outset grey;
    border-radius: 4px;
	padding:  13px 22px;
	 cursor: pointer;
	  font-size: 20px;
	  z-index:1;
}
button:hover {
    background-color: #D80000;
}
button.bz{

	width:100%;
	background-color:brown;
	color:white;
	border: 1px outset grey;
    border-radius: 4px;
	padding:  6px 10px;
	 cursor: pointer;
	  font-size: 12px;
	  
}
button:hover.bz {
    background-color: #D80000;
}


h2{
color:blue;
margin-left:30px;
}


</style>
</head>

<body >


<div   class="a" id="div4" style="background-color:#A9A9A9;" >

  
 <table align="center"  cellpadding="6" width="1517px" >
 <tr >
 <td align="center"><img src="bmsnewlogo.png" width="70px"></td>
 <td width="850px" id="size" align="center"><b>Online  Leave  Portal</b><br/></td></td><td></td><td></td>
 <td><a href="#div0" ><button type="button" class="bz" >Home</button></a><br/><br/>
 <td><a href="#div1" ><button type="button" class="bz" >Leave management</button></a><br/><br/></td>
 <td><a href="#div2" ><button type="button" class="bz">About Us</button><br/><br/></td>
 <td><a href="#div3" width=""><button type="button" class="bz">Locate Us</button><br/><br/></td><td></td><td></td><td></td><td></td>
 </tr>
 </table>
</div>

<div class="b" id="div0">

<table align="center"  cellpadding="6" id="position0" width="1500px">
 <tr >
  <td align="center"><img src="bmsnewlogo.png" width="100px"></td>
 <td width="850px" id="size" align="center"><b>Online  Leave  Portal</b><br/></td><td></td><td></td>
 <td><a href="#div0" ><button type="button" class="bz">Home</button></a><br/><br/></td>
 <td><a href="#div1" ><button type="button" class="bz">Leave management</button></a><br/><br/></td>
 <td><a href="#div2" ><button type="button" class="bz">About Us</button><br/><br/></td>
 <td><a href="#div3" width=""><button type="button" class="bz">Locate Us</button><br/><br/></td><td></td><td></td><td></td><td></td>
 </tr>
 </table>
<p id="position3">
 <hr ></p>
<p id="position">Welcome to bmsce<br/>
Leave Portal
</p>
<p id="position4">An easy and efficient way for requesting and approving a leave.</p> 
<p id="position2"><b>Login or sign up to continue</b>
</p>
<p >
<a href="login.php" >
<button style="position:absolute;top:370px;left:850px;">Log in</button>
</a>

</p>
<p ><a href="register.php">
<button type="button" style="position:absolute;top:370px;left:1050px;">Sign up</button></a>
</p>

<div class="overlay"></div>
</div></div>

<button onclick="topFunction()" id="myBtn" title="Go to top">Go to Top </button>

<div class="article" id="div1" ><br/><br/><br/>
<h2>Leave Management System</h2>
 <div class="article2" align="justify" size="18px">
  <p>Opensoft eLeave is an online leave management software developed specifically for SME. The eLeave software enables companies to speed up leave processing and being paperless 
  also helps companies to reduce overheads related to leave processing. With eLeave, employees will apply for leave electronically using any Internet-connected device 
  (computer, tablet or smartphone) via the web browser. Leave applications are then forwarded electronically to the respective approving officers. With the entire leave 
  processing being electronic, eLeave is convenient, secure and instant for everybody in the company.
  </p>
  <p><font size="5">Secure eLeave Portal:</font><br/><br/>
        As part of eLeave implementation, we will setup an eLeave Portal customised to your organisation’s leave policy.
              <ul><li>
             The eLeave portal is a secure website;</li>
            <li> Employees have access 24×7 to perform all types of leave transactions – submitting new leave requests, edit or cancel existing requests, check leave history,
			 view leave balance, etc;</li>
            <li> Approving officers and managerial staff can access department leave calendar information before approve or reject leave applications;</li>
            <li> Remote access to the portal for all employees 24×7.</li></ul>
  </p>
  <p>
  <font size="5">Document Proof Submission:</font><br/><br/>
  Opensoft eLeave provides a way for employees to submit relevant document proofs to support their leave requests. This is common for medical and hospitalisation leaves, where 
  employees are required to upload medical certificates to validate their leave application. Even for cases such as Exams Leave, employees can submit documents to justify their
  leave requests. Documents are stored digitally and can be retrieved for audit purposes.
  </p>
  <p>
   <font size="5">eLeave is Paperless:</font><br/><br/>
  All leave transactions are done online via the eLeave Portal.

  There is no form to print, no papers to fill in, no paperwork to file.
  Leave requests are routed to approving officers for verification, and they will also approve or deny all the leave requests online.
  Companies eliminate unnecessary expenses related to leave processing (stationery, printing, filing costs, etc).</b>
  </p>
   <br/>
 <hr>
  </div>
</div>
 <div id="div2"><br/><br/><br/>
 <br/>
 <img src="bmsnewlogo.png" class="img2" width="200px">
<h2 >About BMSCE</h2>
<div class="article2" align="justify"><b>

    <p>In the history of Karnataka, the name of late Sri Bhusanayana Mukundadas Sreenivasaiah (BMS) occupies a prominent place in the field of philanthropy. The Maharaja of Mysore honoured him with the title of Raja Karya Prasaktha in 1946.</p>
    <p>He Stared the B.M.S College of Engineering in the same year.He had foreseen the urgent need for high quality technical education in India even before its independence. The ideals for which Sri B.M. Sreenivasaiah stood continue to inspire the inheritors of his legacy.</p>
	<p>After the demise of "Sri. B. M. Sreenivasaiah", his dynamic and enterprising son Sri. B. S. Narayan, took over the reigns of the college. The institution grew from strength-to-strength under his able guidance.</p>
	<p>He was also instrumental in initiating international collaborative programmers such as training foreign students under International Co-operation Division (ICD) and cross cultural programs with Melton Foundation. </p>
 <br/></b>
 <hr></div></div><br/>
  	<div class="article" id="div3">
   <img src="bmsmap.png" width="350px;"  class="img">
  <h2>Locate Us</h2> 
  
 <div class="article2" style="margin-left:200px;">
     <p>
	 P.O. Box No.: 1908,<br/>
	 BMS college of engineering,<br/>
	 Bull Temple Road,<br/>
	 Basavanagudi,<br/>
	 Bangalore - 560019 <br/>
	 Karnataka, India.
	 </p>
    <p>
	Phone: +91-80-26622130-35
Fax: +91-80-26614357
</p>	
  </div>

<hr>




<p style="margin-left:15px;" ><font color="	#484848"><i>Copyright 2017-BMS College of Engineering. Managed by BMSCE</i></font></p>
	  
	  </div>
	  
</div>

	
</body>
</html>