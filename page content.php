<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Template 13</title>
<meta name="description" content="A description of your website">
<meta name="keywords" content="keyword1, keyword2, keyword3">
<link href="css/style.css" rel="stylesheet" type="text/css">

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
  
 <div id="page_content">
    <div class="left_section">
      <div class="common_content">
        <p>
		<marquee><h1 STYLE="COLOR:RED;">TOP COLLEGES RATING</h1></marquee>
        <div>
              
         <?php
		 
		  
   $rset=mysqli_query($conn,"SELECT * FROM add_rating ");
 $rows=mysqli_num_rows($rset);
	echo "<table border='2px' width='100%' >";
	 echo " <tr>
   <th> COLLEGE NAME </th>	
   <th>RATING</th>
   
   </tr>";
	  
	  while($row=mysqli_fetch_assoc($rset)){
	
 echo " <tr>
   <td> ".$row['college']." </td>	
   <td>".$row['rating']."</td>
   
  
   </tr>";
	  }
	  
  echo "</table>"; 
		 
		 
		 ?>			     

		
		</p>
           <hr>
      </div>
 
 

</body></html>
