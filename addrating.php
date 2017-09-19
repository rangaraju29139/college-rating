
<!--including  access-->
<?php include "access.php" ;


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>COLLEGE RATING</title>
<meta name="description" content="A description of your website">
<meta name="keywords" content="keyword1, keyword2, keyword3">
<link href="style.css" rel="stylesheet" type="text/css">
<style>
input[type=text], input[type=password], select {
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
        <h1>ADD RATINGS</h2>
        <div>
  <form name="add_rating"action="addrating submit.php" method="post">
  <label for="mobile number">MOBILE NUMBER</label>
    <input type="text" value='<?php $mobile_no=$_SESSION['mobile_no'];
	echo $mobile_no; ?>' name='moibile_no'>
	
	<label for="college">COLLEGE NAME</label>
	<select name="college" style="padding:12px 20px;" >
  <option selected="selected" value="">-- Select an option--</option>
<?php 
	include "dbcon.php";
	
	$rset=mysqli_query($conn,"SELECT * FROM add_college;");
	while($row=mysqli_fetch_array($rset))
	echo "<option value='" . $row['college'] . "'>" . $row['college'] . "</option>";
?>
</select>
</select>

<label for="RATING">RATING</label>
<select name="rating" style="padding:12px 20px;" >
  <option value="1">one</option>
  <option value="2">two</option>
  <option value="3">three</option>
  <option value="4">four</option>
  <option value="5">five</option>
  <option value="6">six</option>
  <option value="7">seven</option>
  <option value="8">eight</option>
  <option value="9">nine</option>
  <option value="10">ten</option>
</select>
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
