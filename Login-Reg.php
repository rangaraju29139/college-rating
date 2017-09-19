<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>college rating</title>
<meta name="description" content="A description of your website">
<meta name="keywords" content="keyword1, keyword2, keyword3">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="Login-Reg.css">
<style>
input[type=text],input[type=password],select{
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
  
 <?php include "header.php" ?>
    
	 <div id="#d1">
  <?php include "right bar.php" ?>
   </div>
   <div id="#d2">
 <!-- <?php include "regg.php" ?>   -->
 <div id="page_content">
    <div class="left_section">
 <div class="common_content">
        <h2>REGISTRATION</h2>
        <div>
  <form action="submit.php" name="frmregistration" method="post" onSubmit='return validate();' >
  <label for="name">NAME:</label>
  <input type="text" id="fname" name="name" placeholder="Your name..">
  
  <label for="password">password</label>
    <input type="password" id="password" name="password" placeholder="enter your password..">
	
	 <label for="name">EMAIL:</label>
  <input type="text" id="email" name="email" placeholder="enter your email..">
  
    <label for="mobile_no">MOBILE NO</label>
    <input type="text" id="mobile_no" name="mobile_no" placeholder="Your mobile number..">
 
  <label for="name">COLLEGE</label>
  <select NAME="college" style="padding:12px 20px;">
     <option selected="selected" value="">-- Select an option--</option>
<?php 
	include "dbcon.php";
	$rset=mysqli_query($conn,"SELECT * FROM add_college;");
	while($row=mysqli_fetch_array($rset))
	echo "<option value='" . $row['college'] . "'>" . $row['college'] . "</option>";
?>s
	 
  </select>
  <label for="gender" >GENDER:</label>
     <input type="radio" name="gender" value="male" selected>MALE
	 <input type="radio" name="gender" value="female">FEMALE<br />
	 
  <input type="submit" value="Submit" id="submit">
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
 <script type="text/javascript"> 
 
 function validate()
 {
 var fname = document.getElementById('fname').value;	 
 var password=document.getElementById('password').value;
 var email=document.getElementById('email').value;
 var mobile_no=document.getElementById('mobile_no').value;
 if(fname == "") 
 {
	 alert("Name should not be Empty!"); 
	 
	 
 return false;
 }
 var nm = /^[A-Za-z ]{2,30}$/; 
  if(!nm.test(fname)) 
  {
      alert("Invalid Name! Name should contain only characters & spaces.\nIt should contain a minimum of 4 characters & maximum of 30 characters"); 
     return false;
}
      if(password =="") 
 {
	 alert("password should not be Empty!"); 
 return false;
 }
     if(email=="") 
 {
	 alert("Email should not be Empty!"); 
 return false;}
     if(email==".")
         {
             alert("enter valid emailid");
             return false;
         }
     var fdotpos=email.indexOf(".");
      var atpos = email.indexOf("@"); 
   var dotpos = email.lastIndexOf("."); 
   if (fdotpos<1||atpos < 2 || dotpos <= atpos+2 || dotpos+2 >= email.length)   
      {
        alert("In-valid E-mail Address!");
        return false;
 }
  if(mobile_no =="") 
 {
	 alert("Mobile_no should not be Empty!"); 
 return false;
 }
     var mb = /^[0-9]{10}$/;
     if(!mb.test(mobile))
     {
         alert("Invalid Mobile Number! Enter a valid 10 Digit Mobile Number"); 
         return false;
     }
 
 
	   
     
     
     
     
     
      return true;
     
     
 }
     
 
   
         </script>
    
     

</body>
    </html>
