<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'datas');
$q="Select * from MyClass ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);

?>
<!DOCTYPE html>
<html>
<head>
<title>Class Record</title>
<link rel="stylesheet" type="text/css" href="viewStyle.css">
</head>
<div class="heading">
<h1>Class Record Manager</h1>
<h2>Student Data</h2>
</div>
<table id="view_table">
<tr>
<th>Name</th>
<th>RegisterNo</th>
<th>Year</th>
<th>Section</th>
</tr>
<?php
for($i=1;$i<=$num;$i++)
{ 
   $row=mysqli_fetch_array($result);
   ?>
   <tr>
   <td><?php echo $row['Name'];?></td>
   <td><?php echo $row['RegisterNo'];?></td>
   <td><?php echo $row['Year'];?></td>
   <td><?php echo $row['Section'];?></td>
   </tr>
   <?php
}

?>
</table>
<a href="home.php">Home</a><br/>

</body>
</html>