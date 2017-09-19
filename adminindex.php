<?php include "adminaccess.php" ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>admin index</title>
<meta name="description" content="A description of your website">
<meta name="keywords" content="keyword1, keyword2, keyword3">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<div id="wrapper"> 
  
 <?php include "header.php" ?>
  
  <?php include "admin right bar.php" ?>
    </div> 
<!-- page content -->	
      <div id="page_content">
    <div class="left_section">
      <div class="common_content">
        <h2>admin login successful!!</h2>
        <p> <h1>
		      <?php
			        echo "WELCOME $admin_id";
			        
			  ?>
			  <hr>
	</h1>	</p>
           <hr>
      </div>
    
    
  <div class="clear"></div>
  
  <!--start footer from here-->
  <?php include "footer.php" ?>
  
  <!--/. end footer from here--> 
</div>
</div>

</body></html>