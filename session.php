<!DOCTYPE html>
<html>
<head>

</head>
<body>   
  <?php
   session_start();
   if(isset($_POST['mobile_no'])&&isset($_POST['password']))
   {
      include "dbcon.php";
	  $name=$_POST['name'];
	  $mobile_no=$_POST['mobile_no'];
	  $password=$_POST['password'];
	  $rset=mysqli_query($conn,"SELECT name,password,email,mobile_no,college,gender from frmregistration
	  where mobile_no='$mobile_no' and password='$password' ")
	 $rows - mysqli_num_rows($rset);
     if($rows==0)
	 {
		 session_destroy();
		 header('Location:regstyle.php?id=0');
	 }		 
	 else
	 {
		 $rows=mysqli_fetct_accoc($rset);
		 $_SESSION['name']=$row('name');
		 $_SESSION['password']=$row('password');
		 $_SESSION['email']=$row('email');
		 $_SESSION['mobile_no']=$row('mobile_no');
		 $_SESSION['college']=$row('college');
		 $_SESSION['gender']=$row('gender');
	 }

   
   }
  
  
  ?>
 
 
 

</body></html>
