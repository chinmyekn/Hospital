<?php session_start(); ?>
<html>
<head>
<title>HOME</title>
<link rel="stylesheet" type="text/css"
href="css/index.css" media="screen"/>
<meta charset="utf-8">
</head>
<body>
<table border="1" width="100%" style="background-color:black;">
<tr style="background-color:orange; padding:30px;">
<th rowspan="2" bgcolor="black" width="180"><img src="docimg/hoslogook.png" height="110px" width="180px"></th>
<th colspan="5" style="color:#800000;font-size:40px;padding-bottom:20px; background-color:#ffb366;">Sudharshan Hospital</th>
<th style="background-color:#ffb366; padding-top:10px; color:green;"><h2>Helpline:<br>+91 9611608816 <br>+91 9844039627</h2></th>
</tr>
<tr  style="color:white; font-size:35px; background-color:blue; font-style:italic;">
<th><a href="index.php"><u>Home</u></a></th>
<th><a href="doctor.php">Doctors</a></th>
<th><a>
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
<div style="float:left;">
<a href="adminlogin.php"><img src="docimg/adminlogok.png" height="250px" width="220px" style="float:left; margin-top:80px; margin-left:30px; border-radius:65px; margin-bottom:20px;"/></a>
<a href="patlogin.php" ><img src="docimg/patlogok.png" height="250px" width="220px" style="float:left; margin-top:80px; margin-left:20px; border-radius:65px; margin-bottom:20px;"/></a>
<img src="docimg/homebgok.gif" height="400px" width="60%" style="float:right"/>
</div>
<br>
<p>
<h2><b>&nbsp;&nbsp;&nbsp;&nbsp;<u>Setting New Benchmark in Health Care !</u></b></h2>
<h3 style="color:grey; word-spacing:0.4em; letter-spacing:0.1em; line-height:1.3em;"><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sudharshan Hospitals has been providing quality healthcare for the people in their diverse medical needs. People trust us because of the strong relationships we’ve built with them over the years.
Under astute leadership and strong management, Sudharshan Hospitals has evolved as a centre of excellence in medicine providing the highest quality standards of medical treatment to all sections of the society. Our work has always been guided by the needs of patients and delivered by our perfectly combined revolutionary technology, best medical expertise and advanced procedures.
</i></h3>
</p>
<br><hr><br>
<a href="appointment.php">
<div style="text-align:center; font-size:40px; background-color:lightblue; width:100%; height:70px; padding-top:25px;">Click to book an appointment </div></a>
<br><hr><br>
<label style="font-size:40px;"><u>Our Departments</u></label>
<div> 
<br>
<a href="cardiac.php" style="text-decoration:none;">
<div style="color:white; font-size:50px; background-color:maroon; height:90px; width:100%; text-align:center; border:2px solid white; padding-top:10px;">Cardiac Department</div></a>
<a href="Neuro.php" style="text-decoration:none;">
<div style="color:white; font-size:50px; background-color:maroon; height:90px; width:100%; text-align:center; border:2px solid white; padding-top:10px;">Neuro Spine Department</div></a>
<a href="oncology.php" style="text-decoration:none;">
<div style="color:white; font-size:50px; background-color:maroon; height:90px; width:100%; text-align:center; border:2px solid white; padding-top:10px;">Oncology Department</div></a>
<a href="Ent.php" style="text-decoration:none;">
<div style="color:white; font-size:50px; background-color:maroon; height:90px; width:100%; text-align:center; border:2px solid white; padding-top:10px;">ENT Department</div></a>
</div>
<br><hr><br>
<label style="font-size:40px;"><u>Our Doctors</u></label><br><br>
<table cellspacing="10px" cellpadding="20px"align="center" border="0" bgcolor="#f5f5f0">
<tr>
<td><img src="docimg/hdoc4.png" height="250px" width="220px"><br><center><h2>Dr. Murali Mohan</h2><h3>Senior Cardiologist</h3></center></td>
<td><img src="docimg/hdoc2.jpg" height="250px" width="220px"><br><center><h2>Dr. Chandra Shekar</h2><h3>Senior Neuro Surgeon</h3></td>
<td><img src="docimg/hdoc8.jpeg" height="250px" width="220px"><br><center><h2>Dr. Ram Prasad</h2><h3>Oncologist</h3></td>
<td><img src="docimg/hdoc3.jpg" height="250px" width="220px"><br><center><h2>Dr. Sahana Malik</h2><h3>ENT specialist</h3></td>
</tr>
<tr>
<td><img src="docimg/hdoc6.png" height="250px" width="220px"><br><center><h2>Dr. Amith Kulkarni</h2><h3>Junior Surgeon</h3></td>
<td><img src="docimg/hdoc5.png" height="250px" width="220px"><br><center><h2>Dr. Rachana</h2><h3>Junior Oncologist</h3></td>
<td><img src="docimg/hdoc7.png" height="250px" width="220px"><br><center><h2>Dr. Sathish Chandra</h2><h3>Junior Cardiologist</h3></td>
<td><img src="docimg/hdoc1.png" height="250px" width="220px"><br><center><h2>Dr. Roshan Singh</h2><h3>Anasthetic</h3></td>
</tr>
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
Sudharshan Hospital &copy; 2022 Developed by<i>&nbsp;&nbsp;<u>DS Prashanth</u> and <u>Chinmye KN</u></i>
</th>
</tr>
</table>
</body>
</html>