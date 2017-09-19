

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
		
		 $college=$_POST['college'];
		 $rating=$_POST['rating'];
		 
		 
		 
		
    include "dbcon.php";
//queries
$rset1=mysqli_query($conn,"select * from add_rating where college='$college'");
$rows=mysqli_num_rows($rset1);
if($rows==0){
	$count=1;
	$total=$rating;
	$rset=mysqli_query($conn,"INSERT INTO add_rating(college,total,count,rating)
	values('$college','$total','$count','$rating')");
	

	if(!$rset){
	die("COULD NOT INSERT!");
	}
}
else{
	$row=mysqli_fetch_assoc($rset1);
	$total=$row['total'];
	$count=$row['count'];
	$total1=$total+$ating;
	$count1=$count+1;
	$rating1=$total/$count;
mysqli_query($conn,"update add_rating set rating=$rating1,total=$total1,count=$count1 where college='$college'");
     

}	 
	?>
 <h1>COLLEGE rating SUCCESSFULLY SUBMITTED</h1>
		   
      </div> 
    </div>

    
  <div class="clear"></div>
  
  <!--start footer from here-->
  <?php include "footer.php" ?>
  
  <!--/. end footer from here--> 
</div>
</div>




</body></html>
