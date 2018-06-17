<?php
$Name=$_POST['Name'];
$RegisterNo=$_POST['RegisterNo'];
$Year=$_POST[Year];
$Section=$_POST[Section];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'datas');
$q="INSERT INTO MyClass(Name,RegisterNo,Year,Section) values('$Name','$RegisterNo',$Year,'$Section')";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>Insertion</title>
<link rel="stylesheet" type="text/css" href="viewStyle.css">
</head>
<div class="heading">
<h1>Class Record Manager</h1>
<h2>Student Data Insertion</h2>
</div>
<div class="option">
<p><?php if ($status==1) 
	     echo "Data Inserted"; 
     else 
	   echo "Insertion Failed"; 
    ?>
</p>
Do you want to insert more record? <a href="insert.php">Click Here</a>
<a href="home.php">Home</a><br/>
</div>
</body>
</html>