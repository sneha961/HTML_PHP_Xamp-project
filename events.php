<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
     border: 1px solid black;
}
h1{
color:Teal;
width:100%;
height:50px;
font-size:70px;
}

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
<h1>EVENTS</h1>
<?php
$con=mysqli_connect("localhost","root","","mydb");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<br>
<center>
<br><br>
<tr>
<form action="othersevent.php">
<td><input type="submit" name="button1" value="SEE OTHER'S EVENTS">
</td><br><br><br><br></form>
<form action="comevent.php">
<td><input type="submit" name="button2" value="SEE WHO'S ATTENDING YOUR EVENTS">
</td><br><br><br><br></form>
<td><input type="submit" name="button2" value="GO TO PROFILE">
</td><br><br>
</tr>
</center>
</body>
</html>
