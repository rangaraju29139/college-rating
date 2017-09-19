
<!DOCTYPE html>
<html>
<head>

</head>
<body>   
 <?php
session_start();
if(isset($_POST['admin_id']) && isset($_POST['password']))
{
	include "dbcon.php";
	$admin_id=$_POST['admin_id'];
	$password=$_POST['password'];
	$rset=mysqli_query($conn,"SELECT * from adminlogin where admin_id='$admin_id' and password='$password'");
	$rows=mysqli_num_rows($rset);
	if($rows==0)
	{
		session_destroy();
		header('Location:adminlogin.php?id=0');
	}
	else
	{
		$row=mysqli_fetch_assoc($rset);
		$_SESSION['admin_id']=$row['admin_id'];
		$_SESSION['password']=$row['password'];
		 
		 
		
        
		
	}
}
	else if(!isset($_SESSION['admin_id']))
	{
		session_destroy();
		header('Location:adminlogin.php?id=0');
		
	}
?>
 
</body>

</html>
