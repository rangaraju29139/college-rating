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
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
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
   <div id="#d2">
 
<!-- login form -->
 <div id="page_content">
    <div class="left_section">
      <div class="common_content">
        <h1>REGISTERED STUDENTS</h2>
        <div>
<?php

   
   $rset=mysqli_query($conn,"SELECT * FROM frmregistration ");
 $rows=mysqli_num_rows($rset);
	echo "<table border='2px' >";
	 echo " <tr>
   <th> Name </th>	
   <th>Email</th>
   <th>Mobile</th>
   <th>College</th>
   <th>Gender</th>
   </tr>";
	  
	  while($row=mysqli_fetch_assoc($rset)){
	
 echo " <tr>
   <td> ".$row['name']." </td>	
   <td>".$row['email']."</td>
   <td>".$row['mobile_no']."</td>
   <td>".$row['college']."</td>
   <td>".$row['gender']."</td>
   </tr>";
	  }
	  
  echo "</table>"; 

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
