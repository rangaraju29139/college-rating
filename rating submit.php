<!--includeing admin access-->
<?php include "access.php" ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Template 2</title>
<meta name="description" content="A description of your website">
<meta name="keywords" content="keyword1, keyword2, keyword3">
<link href="css/style.css" rel="stylesheet" type="text/css">
<style>
input[type=text], input[type=password],select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 40%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
</style>
</head>
<body>
  <div id="wrapper"> 
	 <?php include "dbcon.php" ?>
  
 <?php include "header.php" ?>
	
	
  <div id="#d1">
  <?php include "student right bar.php" ?>
   </div>
   <div id="#d2"><!-- login form -->
 <div id="page_content">
    <div class="left_section">
      <div class="common_content">
        <h1>COLLEGE RATING SUCCESSFULLY</h2>
        <div>
		<?php 
		
		 $college=$_POST['college'];
$rating=$_POST['rating'];
$comment=$_POST['comment'];

include "dbcon.php";
//queries
mysqli_query($conn,"INSERT INTO add_rating(college,rating,comment)
values('$college','$rating','$comment')");

		
		?>
</div>
		   
      </div> 
    </div>

    
  <div class="clear"></div>
  
  <!--start footer from here-->
  <?php include "footer.php" ?>
  
  <!--/. end footer from here--> 
</div>
</div>




</body></html>

