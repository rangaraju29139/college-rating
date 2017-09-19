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
  
 <?php include "header.php" ?>
  
  <?php include "right bar.php" ?>
   <?php include "contact.php" ?>
    </div> 
<!-- page content -->	
  <div id="page_content">
    <div class="left_section">
      <div class="common_content">
        <h1>student logged out successfully</h2>
        <div>
             <?php

session_destroy();
 ?>      
          
 
</div>
           <hr>
		   
      </div> 
    </div>
    
    
  <div class="clear"></div>
  
  <!--start footer from here-->
  <?php include "footer.php" ?>
  
  <!--/. end footer from here--> 
</div>
</div>

</body></html>