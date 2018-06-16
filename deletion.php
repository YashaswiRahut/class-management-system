<?php
$size=sizeof($_POST);
$j=1;
for($i=1;$i<=$size;$i++,$j++)
{
	$index="b".$j;
	if(isset($_POST[$index]))
		$RegisterNo[$i]=$_POST[$index];
		else
			$i--;
	}
	$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'datas');

for($k=1;$k<=$size;$k++)
{
$q="delete from MyClass where RegisterNo= ".$RegisterNo[$k];
mysqli_query($con,$q);
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>Deletion</title>
<link rel="stylesheet" type="text/css" href="viewStyle.css">
</head>
<div class="heading">
<h1>Class Record Manager</h1>
<h2>Student Data Deletion</h2>
</div>
<div class="option">
<p><?php 
	  
	  echo $size." Data Deleted"; 
     ?>
</p>
</div>
<a href="home.php">Home</a></br>
</body>
</html>