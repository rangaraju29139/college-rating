<HTML>
<HEAD>
</HEAD>
<BODY>
<CENTER><br><br>
<h2>BASIC FORM VALIDATION</h2><br>

<!-- HTML FORM CODE -->
<form name='registration' action='submit.php' method='post' onSubmit='return validate();'>
<table align='center'>
<tr><th align='right' valign='middle'>Roll Number:</th><td><input type='text' name='roll_no' id='roll_no'></td></tr> 
<!-- Give name & id attributes for every field -->
<tr><th align='right' valign='middle'>Name:</th><td><input type='text' name='name' id='name'></td></tr>
<tr><th align='right' valign='middle'>Gender:</th><td><input type='radio' name='gender' value='m' checked='checked'>Male 
						      <input type='radio' name='gender' value='f'>Female</td></tr>
<tr><th align='right' valign='middle'>Department:</th><td>
<select name='dept' id='dept'>
 <option value=''>SELECT DEPARTMENT</option>
 <option value='CSE'>Computer Science & Engineering</option>
 <option value='IT'>Information Technology</option>
 <option value='ECE'>Electronics & Communication Engineering</option>
</select>
</td></tr>
<tr><th align='right' valign='middle'>Date of Birth:</th><td>
<select name='dob_dd'>
 <option value='01'>1</option>
 <option value='02'>2</option>
 <option value='03'>3</option>
 <option value='04'>4</option>
 <option value='05'>5</option>
 <option value='06'>6</option>
 <option value='07'>7</option>
 <option value='08'>8</option>
 <option value='09'>9</option>
 <option value='10'>10</option>
 <option value='11'>11</option>
 <option value='12'>12</option>
 <option value='13'>13</option>
 <option value='14'>14</option>
 <option value='15'>15</option>
 <option value='16'>16</option>
 <option value='17'>17</option>
 <option value='18'>18</option>
 <option value='19'>19</option>
 <option value='20'>20</option>
 <option value='21'>21</option>
 <option value='22'>22</option>
 <option value='23'>23</option>
 <option value='24'>24</option>
 <option value='25'>25</option>
 <option value='26'>26</option>
 <option value='27'>27</option>
 <option value='28'>28</option>
 <option value='29'>29</option>
 <option value='30'>30</option>
 <option value='31'>31</option>
</select>
 -
<select name='dob_mm'>
 <option value='01'>January</option>
 <option value='02'>February</option>
 <option value='03'>March</option>
 <option value='04'>April</option>
 <option value='05'>May</option>
 <option value='06'>June</option>
 <option value='07'>July</option>
 <option value='08'>August</option>
 <option value='09'>September</option>
 <option value='10'>October</option>
 <option value='11'>November</option>
 <option value='12'>December</option>
</select>
-
<select name='dob_yy'>
 <option value='1996'>1996</option>
 <option value='1995'>1995</option>
 <option value='1994'>1994</option>
 <option value='1993'>1993</option>
 <option value='1992'>1992</option>
 <option value='1991'>1991</option>
 <option value='1990'>1990</option>
 <option value='1989'>1989</option>
 <option value='1988'>1988</option>
 <option value='1987'>1987</option>
 <option value='1986'>1986</option>
 <option value='1985'>1985</option>
 <option value='1984'>1984</option>
 <option value='1983'>1983</option>
 <option value='1982'>1982</option>
 <option value='1981'>1981</option>
 <option value='1980'>1980</option>
 <option value='1979'>1979</option>
 <option value='1978'>1978</option>
 <option value='1977'>1977</option>
 <option value='1976'>1976</option>
 <option value='1975'>1975</option>
 <option value='1974'>1974</option>
 <option value='1973'>1973</option>
 <option value='1972'>1972</option>
 <option value='1971'>1971</option>
 <option value='1970'>1970</option>
</select>
</td></tr>
<tr><th align='right' valign='middle'>E-mail ID:</th><td><input type='text' name='email' id='email'></td></tr>
<tr><th align='right' valign='middle'>Mobile:</th><td><input type='text' name='mobile' id='mobile'></td></tr>
<tr><td colspan='2'><input type='checkbox' name='terms' id='terms'> I agree to the terms & conditions.</td></tr>

<tr><td></td><td valign='middle'><br><input type='submit' value='REGISTER' style="background-color:green; color:#ffffff; padding:5px; font-weight: bold;"></td></tr>
</table>
</form>
</CENTER>

<!-- JAVASCRIPT VALIDATION CODE -->
<script type="text/javascript">
 		
function validate()
 {
   //Get Form Field Values to Variables
   var roll_no = document.getElementById('roll_no').value;	   
   var name = document.getElementById('name').value;	   
   var dept = document.getElementById('dept').value;	   
   var email = document.getElementById('email').value;	   
   var mobile = document.getElementById('mobile').value;	   

   //Validate Roll Number - Empty Check & 12 Digit Value Check
   if(roll_no == "") { alert("Roll Number should not be Empty!"); return false;}
   var rn = /^[0-9]{12}$/; //Regular Expression to match a value with exactly 12 digits 
   if(!rn.test(roll_no)) { alert("Invalid Roll Number! Enter a valid 12 Digit Roll Number"); return false;}

   //Validate Name - Empty Check & Only Characters Check
   if(name == "") { alert("Name should not be Empty!"); return false;}
   var nm = /^[A-Za-z ]{4,30}$/; //Regular Expression to match a value with exactly 12 digits 
   if(!nm.test(name)) { alert("Invalid Name! Name should contain only characters & spaces.\nIt should contain a minimum of 4 characters & maximum of 30 characters"); return false;}

   //Validate Department - Make sure a department is selected
   if(dept == "") { alert("Please select a department!"); return false;}

   //Validate Email - Empty Check & Email Format Check
   if(email == "") { alert("Email should not be Empty!"); return false;}
   var atpos = email.indexOf("@"); //get the position of @ in the input email string
   var dotpos = email.lastIndexOf("."); //get the position (last occurrence) of .
   //Checks Min 2 chars in email name (ravi/abc12), domain name (gmail/yahoo) and domain type (.com/.net)
   if (atpos < 2 || dotpos <= atpos+2 || dotpos+2 >= email.length)   
      {
        alert("In-valid E-mail Address!");
        return false;
      }
	   
   //Validate Mobile - Empty Check & Mobile Format Check
   if(mobile == "") { alert("Mobile should not be Empty!"); return false;}
   var mb = /^[0-9]{10}$/; //Regular Expression to match a value with exactly 10 digits 
   if(!mb.test(mobile)) { alert("Invalid Mobile Number! Enter a valid 10 Digit Mobile Number"); return false;}
	   
   if(document.getElementById("terms").checked == false) { alert("Please select the terms & conditions checkbox"); return false;}
   return true;
}
</script> 


</BODY>
</HTML>