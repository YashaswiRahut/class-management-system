<?php
$size= sizeof($_POST);
$records=$size/4;
for($i=1;$i<=$records;$i++)
{
	$index1="RegisterNo".$i;
$RegisterNo[$i]=$_POST[$index1];
$index2="Name".$i;
$Name[$i]=$_POST[$index2];
$index3="Year".$i;
$Year[$i]=$_POST[$index3];
$index4="Section".$i;
$Section[$i]=$_POST[$index4];
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'datas');
for($i=1;$i<=$records;$i++)
{
$q="update MyClass SET RegisterNo='$RegisterNo[$i]',Name=$Name[$i],Year='$Year[$i]',Section='$Section[$i]' where RegisterNo=$RegisterNo[$i]";
mysqli_query($con,$q);
}
mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
<title>Updation</title>
<link rel="stylesheet" type="text/css" href="viewStyle.css">
</head>
<div class="heading">
<h1>Class Record Manager</h1>
<h2>Student Data Deletion</h2>
</div>
<div class="option">
<p><?php 
	  
	  echo " Records Updated"; 
     ?>
</p>
</div>
<br/>
<a href="home.php">Home</a><br/>
</body>
</html>