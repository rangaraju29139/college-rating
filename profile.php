<!--including  access-->
<?php include "access.php" ?>
  <?php include "dbcon.php" ?> 
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>COLLEGE RATING</title>
<meta name="description" content="A description of your website">
<meta name="keywords" content="keyword1, keyword2, keyword3">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<div id="wrapper"> 
  
 <?php include "header.php"; ?>
 
  <?php include "student right bar.php"; ?>
  <?php include "contact.php"; ?>

     </div> 
<!-- page content -->	
     <div id="page_content">
    <div class="left_section">
      <div class="common_content">
     
        
		
		
           <hr><br>
		   <h1>YOUR DETAILS:</h1><br>
		   <h1> <?php
			        echo "WELCOME $name";
			        
			  ?> </h1>
		   <?php

   $name=$_SESSION['name'];
  $mobile_no=$_SESSION['mobile_no'];
   $rset=mysqli_query($conn,"SELECT * FROM frmregistration where mobile_no='$mobile_no' and password='$password' ");
 $rows=mysqli_num_rows($rset);
	echo "<table border='2px' width='100%' >";
	 echo " <tr>
   <th> Name </th>	
   <th>Email</th>
   <th>Mobile</th>
   <th>College</th>
   <th>Gender</th>
   </tr>";
	  
	  $row=mysqli_fetch_assoc($rset);
	
 echo " <tr>
   <td> ".$row['name']." </td>	
   <td>".$row['email']."</td>
   <td>".$row['mobile_no']."</td>
   <td>".$row['college']."</td>
   <td>".$row['gender']."</td>
   </tr>";
	  
	  
  echo "</table>"; 

?>                   
	
      </div>

      <div class="top_content border_none">
     
	<!--insurance-->
      </div>
    </div>
    
    
  <div class="clear"></div>
  
  <!--start footer from here-->
  <?php include "footer.php" ?>
  
  <!--/. end footer from here--> 
</div>
</div>



</body></html>