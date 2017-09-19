<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Template 2</title>
<meta name="description" content="A description of your website">
<meta name="keywords" content="keyword1, keyword2, keyword3">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
  <?php include "header.php";
$college=$_POST['college'];
$college_id=$_POST['college_id'];
$district=$_POST['district'];
$mandal=$_POST['mandal'];
$city_town=$_POST['city_town'];
$pincode=$_POST['pincode'];
$college_url=$_POST['college_url'];
include "dbcon.php";
//queries
mysqli_query($conn,"INSERT INTO add_college(college,college_id,district,mandal,city_town,pincode,college_url)
values('$college','$college_id','$district','$mandal','$city_town','$pincode','$college_url')");
?>
<br>

</body></html>