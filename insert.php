<!DOCTYPE html>
<html>
<head>
<title>Insertion Form</title>
<link rel="stylesheet" type="text/css" href="viewStyle.css">
</head>
<div class="heading">
<h1>Class Record Manager</h1>
<h2>Enter Student Data:</h2>
</div>
<div class="option">
<form action="insertion.php" method="post">
<table>
<tr>
<th>Name : </th>
<td><input type="text" name="Name" required /></td>
</tr>
<tr>
<th>Register Number : </th>
<td><input type="text" name="RegisterNo" required /></td>
</tr>
<tr>
<th>Year : </th>
<td><input type="radio" name="Year" value="1" >1</br>
<input type="radio" name="Year" value="2" >2</br>
<input type="radio" name="Year" value="3" >3</br>
<input type="radio" name="Year" value="4" >4</br>
</td>
</tr>
<tr>
<th>Section : </th>
<td><input type="text" name="Section" required /></td>
</tr>
<tr>
<th></th>
<td><input type="submit" value="Insert" /></td>
</tr>
</table>
</form>
</div>
<a href="home.php">Home</a><br/>

