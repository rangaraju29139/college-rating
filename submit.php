<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Template 2</title>
<meta name="description" content="A description of your website">
<meta name="keywords" content="keyword1, keyword2, keyword3">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
 <div id="wrapper"> 
	 <?php include "dbcon.php" ?>
  
 <?php include "header.php" ?>
	
	
  <div id="#d1">
  <?php include "student right bar.php" ?>
   </div>
   <div id="#d2">
 
<!-- login form -->
 <div id="page_content">
    <div class="left_section">
      <div class="common_content">        
        <div>
		<?php
$name=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];
$mobile_no=$_POST['mobile_no'];
$college=$_POST['college'];
$gender=$_POST['gender'];
include "dbcon.php";
     include "send_mail.php";
//queries
mysqli_query($conn,"INSERT INTO frmregistration(name,password,email,mobile_no,college,gender)
values('$name','$password','$email','$mobile_no','$college','$gender')");
?>
 <h1>STUDENT DATA SUCCESSFULLY SUBMITTED</h1>
</div>
		   
      </div> 
    </div>
<br>
  
  <div class="clear"></div>
  
  <!--start footer from here-->
  <?php include "footer.php" ?>
  
  <!--/. end footer from here--> 
</div>
</div>




</body></html>
