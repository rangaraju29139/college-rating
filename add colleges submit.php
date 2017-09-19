<!--includeing admin access-->
<?php include "adminaccess.php" ?>

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
  <?php include "admin right bar.php" ?>
   </div>
   <div id="#d2"><!-- login form -->
 <div id="page_content">
    <div class="left_section">
      <div class="common_content">
        
        <div>
		<?php 
		
		 $college=$_POST['college'];
$college_id=$_POST['college_id'];
$district=$_POST['district'];
$mandal=$_POST['mandal'];
$city_town=$_POST['city_town'];
$pincode=$_POST['pincode'];
$college_url=$_POST['college_url'];

include "dbcon.php";
//queries
$rset=mysqli_query($conn,"INSERT INTO add_college(college,college_id,district,mandal,city_town,pincode,college_url)
values('$college','$college_id','$district','$mandal','$city_town','$pincode','$college_url')");

if(!$rset){
	die("COULD NOT INSERT!");
	

}	
	?>
 <h1>COLLEGE DATA SUCCESSFULLY SUBMITTED</h1>
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

