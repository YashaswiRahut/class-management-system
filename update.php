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
<title>Updation Form</title>
<link rel="stylesheet" type="text/css" href="viewStyle.css">
</head>
<div class="heading">
<h1>Class Record Manager</h1>
<h2>Update Student Data:</h2>
</div>
<form action="updation.php" method="post">
<table id="view_table">
<tr>
<th>Name</th>
<th>Register Number</th>
<th>Year</th>
<th>Section</th>
</tr>
<?php
for($i=1;$i<=$num;$i++)
{ 
   $row=mysqli_fetch_array($result);
   ?>
   <tr>
   <td><input type="text" name="Name<?php echo $i;  ?>"  value="<?php echo $row['Name'];?>" /></td>
   <td><input type="text" name="RegisterNo<?php echo $i;  ?>" value= "<?php echo $row['RegisterNo'];?>"/> </td>
   <td><input type="text" name="Year<?php echo $i;  ?>" value="<?php echo $row['Year'];?>" /></td>
   <td><input type="text" name="Section<?php echo $i;  ?>" value="<?php echo $row['Section'];?>" /></td>
   </tr>
   <?php
}
?>
</table>
<input type= "submit" value="Update" />
</form>
<br/><br/>
<a href="home.php">Home</a><br/>

</body>
</html>