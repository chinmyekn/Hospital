<?php require 'db.php'; ?>
<html>
<head>
<title>Our Doctors</title>
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
<th><a href="doctor.php"><u>Doctors</u></a></th>
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
<th><a href="gallery.php">Gallery</a></th>
<th><a href="contact.php">Contact Us</a></th>
</tr>
</table>
<table align="center" cellspacing="5px" width="100%">
<tr align="center">
<tr style="color:white; font-size:40px;"><th style="background-color:brown">Sl.no</th><th style="background-color:brown">Doctor Name</th>
<th style="background-color:brown">Designation</th><th style="background-color:brown">Qualification</th><th style="background-color:brown">Image</th>
</tr>
<?php
$sel="SELECT * FROM doctor";
$run = mysqli_query($connect,$sel);
$i=0;
while($rowdr= mysqli_fetch_array($run))
{
$name= $rowdr['doctorname'];
$post= $rowdr['designation'];
$info= $rowdr['docinfo'];
$img= $rowdr['doctorimage'];
$i++;
?>
<tr align="center" bgcolor="#99FF66">
<td style="font-size:30px; padding:10px;"><?php echo $i; ?></td>
<td style="font-size:30px;"><?php echo $name; ?></td>
<td style="font-size:30px;"><?php echo $post; ?></td>
<td style="font-size:30px;"><?php echo $info; ?></td>
<td><img src="dbimg/<?php echo $img; ?>" width="160" height="140"></td>
</tr>
<?php } ?>
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
Sudharshan Hospital &copy; 2020 Developed by<i>&nbsp;&nbsp;<u>Chinmye KN</u> and <u>DS Prashanth</u></i>
</th>
</tr>
</table>
</body>
</html>