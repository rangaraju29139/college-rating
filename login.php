<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>COLLEGE RATING</title>
<meta name="description" content="A description of your website">
<meta name="keywords" content="keyword1, keyword2, keyword3">
<link href="style.css" rel="stylesheet" type="text/css">
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
	
	<?php include "navigation.php" ?>
  <div id="#d1">
  <?php include "right bar.php" ?>
   </div>
   <div id="#d2">
 
<!-- login form -->
 <div id="page_content">
    <div class="left_section">
      <div class="common_content">
        <h2>login</h2>
        <div>
  <form action="profile.php" method="post">
    <label for="mobile_no">mobile number</label>
    <input type="text" id="mobile_no" name="mobile_no" placeholder="Your mobile number..">

    <label for="password">password</label>
    <input type="password" name="password"  id="password" placeholder="enter your password..">
	

	<?php  
		   if(isset($_GET['id']))
		   {
			   echo "<font color='red'> <br> Invalid  login  or  password </font>";
		   }
		   ?>
    <input type="submit" value="Submit">
  </form>
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
