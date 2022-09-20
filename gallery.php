<?php require 'db.php'; ?>
<html>
<head>
<title>Gallery</title>
<link rel="stylesheet" type="text/css"
href="css/index.css" media="screen"/>
<meta charset="utf-8">
</head>	
<body>
<table border="1" width="100%" style="background-color:black;">
<tr style="background-color:orange;padding:30px;">
<th rowspan="2" bgcolor="black" width="180"><img src="docimg/hoslogook.png" height="110px" width="180px;"></th>
<th colspan="5" style="color:#800000;font-size:40px;padding-bottom:20px; background-color:#ffb366;">Sudharshan Hospital</th>
<th style="background-color:#ffb366; padding-top:10px; color:green;"><h2>Helpline:<br>+91 9611608816 <br>+91 9844039627</h2></th>
</tr>
<tr style="color:white;font-size:35px;background-color:blue;font-style:italic;">
<th><a href="index.php">Home</a></th>
<th><a href="doctor.php">Doctors</a></th>
<th><a href="#">
<select style="color:white; font-size:35px; background-color:blue; font-style:italic; border:none;" onchange="javascript:handleSelect(this)">
<option style="background-color:lightgray; color:black; font-size:27px">Our Department</option>
<option style="background-color:lightgray; color:black; font-size:27px" value="cardiac">Cardiac</option>
<option style="background-color:lightgray; color:black; font-size:27px" value="Neuro">Neuro Spine </option>
<option style="background-color:lightgray; color:black; font-size:27px" value="oncology">Oncology </option>
<option style="background-color:lightgray; color:black; font-size:27px" value="Ent">ENT </option>
</select></a> </th>
<script type="text/javascript">
function handleSelect(elm)
{
window.location = elm.value+".php";
}
</script>
<th><a href="appointment.php">Book Appointment</a></th>
<th><a href="gallery.php"><u>Gallery</u></a></th>
<th><a href="contact.php">Contact Us</a></th>
</tr>
</table>
<h1><u>Laboratory</u></h1>
<?php
$sel = "SELECT * FROM gallery where imgid='2'";
$run = mysqli_query($connect,$sel);
while($rowimg = mysqli_fetch_array($run))
{
	$img2 = $rowimg['img2'];
	$img3 = $rowimg['img3'];
	$img4 = $rowimg['img4'];
	$img5 = $rowimg['img5'];
}	
?>
<table border="0" bgcolor="maroon">
<tr>
<td><img src="img/<?php echo $img2; ?>" width="380" height="280"><br><center><h2 style="color:white">X-Ray CT Scanner</h2></center></td>
<td><img src="img/<?php echo $img3; ?>" width="260" height="280"><br><center><h2 style="color:white">Digital Diagonistic set</h2></center></td>
<td><img src="img/<?php echo $img4; ?>" width="400" height="280"><br><center><h2 style="color:white">MRI Scanner</h2></center></td>
<td><img src="img/<?php echo $img5; ?>" width="280" height="280"><br><center><h2 style="color:white">Electrocardiogram</h2></center></td>
</tr>
</table>
<br>
<h1><u>Infrastructure</u></h1>
<?php
$sel = "SELECT * FROM gallery  where imgid='4'";
$run = mysqli_query($connect,$sel);
while($rowimg = mysqli_fetch_array($run))
{
	$img6 = $rowimg['img1'];
	$img7 = $rowimg['img2'];
	$img8 = $rowimg['img3'];
	$img9 = $rowimg['img4'];
}	
?>
<table border="0" bgcolor="maroon">
<tr>
<td><img src="img/<?php echo $img6; ?>" width="380" height="280"><center><h2 style="color:white">Reception Desk</h2></center></td>
<td><img src="img/<?php echo $img7; ?>" width="310" height="280"><center><h2 style="color:white">Special ward</h2></center></td>
<td><img src="img/<?php echo $img8; ?>" width="350" height="280"><center><h2 style="color:white">Pharma</h2></center></td>
<td><img src="img/<?php echo $img9; ?>" width="280" height="280"><center><h2 style="color:white">Canteen</h2></center></td>
</tr>
</table>
<br>
<h1><u>Emergency Services</u></h1>
<?php
$sel = "SELECT * FROM gallery  where imgid='5'";
$run = mysqli_query($connect,$sel);
while($rowimg = mysqli_fetch_array($run))
{
	$img10 = $rowimg['img1'];
	$img11 = $rowimg['img2'];
	$img12 = $rowimg['img3'];
	$img13 = $rowimg['img4'];
}	
?>
<table border="0" bgcolor="maroon">
<tr>
<td><img src="img/<?php echo $img10; ?>" width="380" height="280"><center><h2 style="color:white">Ambulance Service</h2></center></td>
<td><img src="img/<?php echo $img11; ?>" width="310" height="280"><center><h2 style="color:white">Health Care</h2></center></td>
<td><img src="img/<?php echo $img12; ?>" width="350" height="280"><center><h2 style="color:white">Emergency Entrance</h2></center></td>
<td><img src="img/<?php echo $img13; ?>" width="280" height="280"><center><h2 style="color:white">At your Service</h2></center></td>
</tr>
</table>
</table>
<table width="100%" bgcolor="#d9d9d9" border="0">
<tr>
<th align="center">
<br>
<h2 style="font-size:30px;"><u><center>Contact Us</center></u></h2>
<p> Sudharshan Hospital, Jayanagar</p>
<p>#1956, 30th Cross Road</p>
<p>5th Block, Jayanagar</p>
<p>Bangalore 560034</p>
<p>Karnataka, India</p><br>
<p>+91 9611608816</p>
<p>+91 9844039627</p>
<p>sudharshan.info@gmail.com</p>
<br>
</th>
<th align="center">
<h2 style="font-size:30px;"><u><center>Departments</center></u></h2>
<p>Cardiac Department</p>
<p>Neuro Spine Department</p>
<p>Oncology Department</p>
<p>ENT Department</p>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</th>
<th align="center">
<h2 style="font-size:30px;"><u><center>Social Media</center></u></h2>
<p><a href="www.twitter.com" style="color:black; font-size:18px;" >twitter</a></p>
<p><a href="www.facebook.in" style="color:black; font-size:18px;">facebook</a></p>
<p><a href="www.instagram.in" style="color:black; font-size:18px;">instagram</a></p>
<p><a href="www.youtube.com" style="color:black; font-size:18px;">youtube</a></p>
<p><a href="www.snapchat.com" style="color:black; font-size:18px;">snapchat</a></p>
<br>
<br>
<br>
<br>
<br>
</th>
</tr>
<tr>
<th  colspan="3" align="center" style="font-size:20px;background-color:#a6a6a6; padding:25px;">
Sudharshan Hospital &copy; 2020 Developed by<i>&nbsp;&nbsp; <u>DS Prashanth</u> and <u>Chinmye KN</u></i>
</th>
</tr>
</table>
</body>
</html>
