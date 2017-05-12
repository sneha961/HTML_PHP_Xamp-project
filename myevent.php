<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
     border: 1px solid black;
}
h1{
color:Brown;
width:100%;}

body {
background: #A52A2A; /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #00d2ff , #928DAB); /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #00d2ff , #928DAB); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

input[type=submit]{

	background-color:#A52A2A	;
	-webkit-border-top-left-radius:20px;
	-moz-border-radius-topleft:20px;
	border-top-left-radius:20px;
	-webkit-border-top-right-radius:20px;
	-moz-border-radius-topright:20px;
	border-top-right-radius:20px;
	-webkit-border-bottom-right-radius:20px;
	-moz-border-radius-bottomright:20px;
	border-bottom-right-radius:20px;
	-webkit-border-bottom-left-radius:20px;
	-moz-border-radius-bottomleft:20px;
	border-bottom-left-radius:20px;
	text-indent:0;
	border:1px solid #ee1eb5;
	display:inline-block;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	font-style:normal;
	height:65px;
	line-height:65px;
	text-decoration:none;
	text-align:center;
	text-shadow:1px 1px 0px #c70067



}

</style>
</head>
<body>
<center>
<h1>YOUR EVENTS</h1>

<br>

<?php
$con=mysqli_connect("localhost","root","","mydb");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM myevents");

echo "<table border='1'>
<tr>

<th><h2>  NAME  </h2></th>
<th><h2>  DATE </h2></th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td><h3>" . $row['name'] . "</td></h3>";
echo "<td><h3>" . $row['start'] . "</td></h3>";

echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?> 

<br>


<center>
<br><br>
<tr>
<td><input type="submit" name="button2" value="GO TO PROFILE">
</td><br><br>
<td><input type="submit" name="button3" value="GO TO EVENT PAGE">
</td>
</tr>
</center>
</body>
</html>