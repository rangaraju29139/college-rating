<html>
<head>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

<select name="dept">
<option selected="selected" value="">-- Select an option --</option>
<?php 
	include "dbcon.php";
	$rset=mysqli_query($conn,"SELECT * FROM dept;");
	while($row=mysqli_fetch_array($rset))
	echo "<option value='" . $row['dept'] . "'>" . $row['dname'] . "</option>";
?>
</select>
<input type="submit" name="submit">
</form>

<?php 
if(isset($_POST['submit'])){
$dept=$_POST['dept'];
//echo $dept;
 echo "<table border='2' width='100%' >
  <tr>
   <td>Name</td>
   <td>Register no</td>
   <td>Email</td>
   <td>Date of Birth</td>
   </tr>";
   include "dbcon.php";
   
 $rset=mysqli_query($conn,"SELECT * FROM registration where dept='$dept'");
 $rows=mysqli_num_rows($rset);
	echo "Count: ".$rows;
	  while($row=mysqli_fetch_assoc($rset)){
	
 echo " <tr>
   <td> ".$row['name']." </td>	
   <td>".$row['rno']."</td>
   <td>".$row['email']."</td>
   <td>".$row['dob']."</td>
   </tr>";
	  }
	  
  echo "</table>"; 
}
   ?>

</body>
</html>

