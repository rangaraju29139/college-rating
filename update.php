<?php include"sidebar.php";
include "access.php";
?>
<html>
<head>
<title>Submit</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Slam Book-Friends Forever</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/default.css">
<script>

  </script>
</head>
<body>
<p> 
<center>
    <footer>
        <div class="footer-content">
<?php	 
 ?>
    <?php
	$email=$_SESSION['email'];
	  include "dbcon.php";
	// Perform queries 
      $rset=mysqli_query($conn,"SELECT * FROM writeslam where email='$email' ");
	  //$row=mysqli_fetch_assoc($rset);
	

	  while($row=mysqli_fetch_assoc($rset))
	  {
  $name = $row['name'];
  $mobile = $row['mobile'];
  echo"$mobile $email";
  $email = $row['email'];
  $address = $row['address'];
  $abtme = $row['abtme'];
  $talents = $row['talents'];
  $food = $row['food'];
  $fmoment = $row['fmoment'];
  $website = $row['website'];
  $fid = $row['fid'];
  $gender = $row['gender'];
  $bday = $row['bday'];
  $hobbies = $row['hobbies'];	
	   echo "
	    <form action='succupdate.php' class='register' method='post'>
            <h1>Written Slam</h1>
            <fieldset class='row1'>
			<legend>How can i contact You ?
                </legend>
				<p>
                    <label>Name*
                    </label>
                    <input type='text' name='name' value='$name' id='name' />
					<label>Mobile *
                    </label>
                    <input type='text' name='mobile' value='$mobile' id='mobile' />
					</p>
					<p>
					<label>Email *
                    </label>
                    <input type='text' name='email' value='$email' id='email' />
                       
                </p>
				<label>Address*
                    </label>
                    <textarea rows='3' cols='20' name='address'>$address
					</textarea>
               </fieldset>
            <fieldset class='row2'>
                <legend>Answer my silly Questions
                </legend>
                <p>
				
                    <label>About me
                    </label>
                    &nbsp;<input type='text' class='long'  name='abtme' value='$abtme' id='abtme' >
                </p>
                <p>
                    <label>Ur Special Talents 
                    </label>
                    <input type='text' class='long'  name='talents' value='$talents' id='talents' >
                </p>
                <p>
                    <label  >Favorite Food
                    </label>
                    <input type='text' class='long'  name='food' value='$food' id='food' />
                </p>
                <p>
                    <label>Funniest Moment 
                    </label>
                    <input type='text' class='long'  name='fmoment' id='fmoment' value='$fmoment' />
                </p>

                <p>
                    <label class='optional'>Website
                    </label>
                    <input class='long' type='text'  name='website' id='website' value='$website' />

                </p>
				
				<p>
                    <label class='optional'>Facebook Id
                    </label>
                    <input class='long' type='text' name='fid' id='fid' value='$fid' />

                </p>
            </fieldset>
            <fieldset class='row3'>
                <legend>Further Information </legend>
                <p>
                    <label>Gender *</label>
                    <input type='text' value='$gender' name='gender' id='gender' />
                    
                </p>
				 <p>
                    <label>Birthday *</label>
                    <input type='text' value='$bday' name='bday' id='bday' />
                    
                </p>
				<p>
                    <label>Hobbies *
                    </label>
                    <input type='text'  name='hobbies' id='hobby' value='$hobbies' />
                </p>
				</fieldset>
            <fieldset class='row4'>
                
            </fieldset>
			<br><br>
           <center><div>
		   <input type='submit'  class='button'  value='Update Slam'  name='update' >
		   </div> </center>
        		
	   ";
	 }
	  ?> </form>

<!--
if(isset($_POST['update']))
{

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email=$_POST['email'];
$abtme = $_POST['abtme'];
$talents = $_POST['talents'];
$food = $_POST['food'];
$fmoment = $_POST['fmoment'];
$website = $_POST['website'];
$fid = $_POST['fid'];
$gender = $_POST['gender'];
$bday = $_POST['bday'];
$hobbies = $_POST['hobbies'];
$updated=mysqli_query($conn,"UPDATE writeslam SET 
		name='$name', abtme='$abtme', talents='$talents' food='$food',fmoment='$fmoment', website='$webiste',fid='$fid',gender='$gender', bday='$bday', hobbies='$hobbies' WHERE email='$email'")or die();
  if($updated)
  {
  $msg="Successfully Updated!!";
  header('Location:succartupdate.php');
  }
  ?> !-->
	  
                   <div class="clear"></div>
 
 </center>
 <?php include"fotter.php"; ?>
</footer>
</body>
</html>