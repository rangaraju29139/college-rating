
<!--includeing admin access-->
<?php include "adminaccess.php" ?>
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
	 <?php include "dbcon.php" 
	 
	 ?>
  
 <?php include "header.php" ?>
	
	
  <div id="#d1">
  <?php include "admin right bar.php" ?>
   </div>
   <div id="#d2">
 
<!-- login form -->
 <div id="page_content">
    <div class="left_section">
      <div class="common_content">
        <h1>ADD COLLEGES</h2>
        <div>
  <form action="add colleges submit.php" name="add_college" method="post">
    <label for="college name">COLLEGE NAME</label>
    <input type="text" id="college" name="college" placeholder="enter college name..">

	 <label for="college_id">EAMCET COLLEGE ID</label>
    <input type="text" id="college_id" name="college_id" placeholder="enter eamcet college id..">
	
    <label for="district">DISTRICT</label>
    <input type="text" id="district" name="district" placeholder="enter district..">
	
	 <label for="mandal">MANDAL</label>
    <input type="text" id="mandal" name="mandal" placeholder="enter mandal.....">
	
	 <label for="city/town">CITY/TOWN</label>
    <input type="text" id="city_town" name="city_town" placeholder="enter city/town..">
	
	 <label for="pincode">PINCODE</label>
    <input type="text" id="pincode" name="pincode" placeholder="enter pincode..">

     <label for="college_url">COLLEGE WEBSITE URL</label>
    <input type="text" id="college_url" name="college_url" placeholder="enter college website url.">	
	  
    <input type="submit" name="submit" value="Submit">
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
