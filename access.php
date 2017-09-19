
<!DOCTYPE html>
<html>
<head>

</head>
<body>   
 <?php
session_start();
if(isset($_POST['mobile_no']) && isset($_POST['password']))
{
	include "dbcon.php";
	$mobile_no=$_POST['mobile_no'];
	$password=$_POST['password'];
	$rset=mysqli_query($conn,"SELECT * from frmregistration where mobile_no='$mobile_no' and password='$password'");
	$rows=mysqli_num_rows($rset);
	if($rows==0)
	{
		session_destroy();
		header('Location:login.php?id=0');
	}
	else
	{
		$row=mysqli_fetch_assoc($rset);
		$_SESSION['name']=$row['name'];
		$_SESSION['email']=$row['email'];
		$_SESSION['mobile_no']=$row['mobile_no'];
		$_SESSION['college']=$row['college'];
		$_SESSION['gender']=$row['gender'];
		
		
        
		
	}
}
	else if(!isset($_SESSION['mobile_no']))
	{
		session_destroy();
		header('Location:login.php?id=0');
		
	}
?>
 
</body>

</html>
