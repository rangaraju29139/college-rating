<?php

  require_once('email/class.phpmailer.php');
  include("email/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded		
		
  $mail = new PHPMailer();
  $mail->IsSMTP(); // telling the class to use SMTP
  $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
  $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
  $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
  $mail->Username   = "slambook0123@gmail.com";  // GMAIL username
  $mail->Password   = "slam@123";            // GMAIL password

  $mail->SetFrom('slambook0123@gmail.com', 'slambook'); // Change the name as you want
  $mail->Subject    = "Slam book Registration";
  $mail->Body = "Thank You for your registration!!\n~Slam Book Project Team";
  $mail->AddAddress("$email");

  $mail->Send();

  echo "<br><br><font color='black' size='3'><b>Email has been Successfully Sent!</b></font></center>"; 	  

  ?>
 
 
