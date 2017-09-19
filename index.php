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
<?php include "dbcon.php" ?>
<div id="wrapper"> 
  
 <?php include "header.php" ?>
  <?php include "right bar.php" ?>
   <?php include "contact.php" ?>
    </div> 
<!-- page content -->	
    <?php include "page content.php" ?>

      <div class="top_content border_none">
	  <!--acadamics-->
	  <?php include "acadamics.php" ?>
	  <!--admission selectivity-->
	  <?php include "admission_selectivity.php" ?>
	  <!-- categories-->
		<?php include "categories.php" ?>
        <!--  insurance-->
		<?php include "insurance.php" ?>
		<!--financial aid-->
          <?php include "financial_aid.php" ?>
	  <!-- Quality of life-->
	  <?php include "/quality_of_life.php" ?>
	 
	  <!--fire security-->
	  <?php include "fire_safety.php" ?>
	  <!--green-->
	  <?php include "green.php"?>
	  
	  	  
	  
        
      </div>
    </div>
    
    
  <div class="clear"></div>
  
  <!--start footer from here-->
  <?php include "footer.php" ?>
  
  <!--/. end footer from here--> 
</div>
</div>

</body></html>