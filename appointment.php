<?php 
session_start();
require 'db.php';
?>
<html>
<head>
 <title>Appointment</title>
<link rel="stylesheet"href="css/app.css" type="text/css">
</head>
<body>
<table border="1" width="100%" style="background-color:black;">
<tr style="background-color:orange;padding:30px;">
<th rowspan="2" bgcolor="black" width="180"><img src="docimg/hoslogook.png" height="110px" width="180px;"></th>
<th colspan="5" style="color:#800000;font-size:40px;padding-bottom:20px; background-color:#ffb366;">Sudharshan Hospital</th>
<th style="background-color:#ffb366; padding-top:10px; color:green;"><h2>Helpline:<br>+91 9611608816 <br>+91 9611608339</h2></th>
</tr>
<tr  style="color:white;font-size:30px;background-color:blue;font-style:italic;">
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
<th><a href="appointment.php"><u>Book Appointment</u></a></th>
<th><a href="gallery.php">Gallery</a></th>
<th><a href="contact.php">Contact Us</a></th>
</tr>
</table>
<?php 
if(isset($_SESSION['email']))
{
	echo "<a style='float:left; color:purple;'><h2><u>Welcome ".$_SESSION['email']."</u></h2></a>";
	echo "<br>";
	echo "<a href='logout.php' style='float:right;'><input class='sub' type='submit' value='Logout'></a>";
?>
<div>
<h1>BOOK YOUR APPOINTMENT</h1>
<hr>
<!--<img src="appointment.jpeg" height="800px" width="600px" style="float:left; margin-left:10px; margin-top:5px;"></img>-->
<form method="post" action="" >
<div align="center">
<br>
<p class="input">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Patient Name:
<input type="text" name="patname" placeholder="Enter Patient's Name"></p>
<p class="input">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Patient Email:
<input  type="email" name="patemail" placeholder="demo@gmail.com"></p>
<center><label>Gender:</label>
<select name="gender">
<option>Select</option>
<option>MALE</option>
<option>FEMALE</option>
<option>OTHER</option></center>
</optgroup>
</select>
<p class="input">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Phone Number:
<input type="tel" name="phone" placeholder="+91"></p>
<p class="input">Appointment Date:
<input type="date" name="appointdate"></p>
<select name="docname" align="center">
<option><?php echo "Choose The Doctor "?></option>
<?php
$sel="SELECT * FROM doctor";
$run = mysqli_query($connect,$sel);
while($rowdr= mysqli_fetch_array($run))
{
$id= $rowdr['doctorid'];
$name= $rowdr['doctorname'];
$post=$rowdr['designation'];
echo"<option value='$id'>$name &mdash; $post</option>";
}  
?>
</select>
<br>
<br>
</div>
</div>
<table id="tableId" border="0" align="center" cellspacing="6px" cellpadding="10px" class="font">
<h2 align="center">Choose an Appointment Time</h2>
<tr>
<td><input class="buttons" type="button" value="9:30"><br><center>Slot_ID -- M1</center></td>
<td><input class="buttons" type="button" value="10:00"><center>Slot_ID -- M2</center></td>
<td><input class="buttons" type="button" value="10:30"><center>Slot_ID -- M3</center></td>
<td><input class="buttons" type="button" value="11:00"><center>Slot_ID -- M4</center></td>
</tr>
<tr>
<td><input class="buttons" type="button" value="11:30"><center>Slot_ID -- M5</center></td>
<td><input class="buttons" type="button" value="12:00"><center>Slot_ID -- A1</center></td>
<td><input class="buttons" type="button" value="12:30"><center>Slot_ID -- A2</center></td>
<td><input class="buttons" type="button" value="2:00"><center>Slot_ID -- A3</center></td>
</tr>
<tr>
<td><input class="buttons" type="button" value="2:30"><center>Slot_ID -- A4</center></td>
<td><input class="buttons" type="button" value="3:00"><center>Slot_ID -- A5</center></td>
<td><input class="buttons" type="button" value="3:30"><center>Slot_ID -- A6</center></td>
<td><input class="buttons" type="button" value="4:00"><center>Slot_ID -- A7</center></td>
</tr>
<tr>
<td><input class="buttons" type="button" value="4:30"><center>Slot_ID -- A8</center></td>
<td><input class="buttons" type="button" value="5:00"><center>Slot_ID -- A9</center></td>
<td><input class="buttons" type="button" value="5:30"><center>Slot_ID -- A10</center></td>
<td><input class="buttons" type="button" value="6:00"><center>Slot_ID -- A11</center></td>
</tr>
</table>
<div>
<p style="font-size:22px; color:purple; text-align:center;">Enter Slot_ID to confirm Appointment time:<input type="text" name="appointtime" placeholder="EX:M1"></p>
</div>
<br>
<br>
<center><input class="submit" type="submit" name="Register" value="Book Appointment"></center>
<br>
<br>
</form>
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
Sudharshan Hospital &copy; 2020 Developed by<i>&nbsp;&nbsp;<u>DS Prashanth</u> and <u>Chinmye KN</u></i>
</th>
</tr>
</table>
<?php 
if(isset($_POST['Register']))
{
 $patname=$_POST['patname'];
 $patemail=$_POST['patemail'];
 $gender=$_POST['gender'];
 $phone=$_POST['phone'];
 $appointdate=$_POST['appointdate'];
 $appointtime=$_POST['appointtime'];
 $docname=$_POST['docname'];
 $s="SELECT * FROM appoint WHERE(appointdate='$appointdate' and appointtime='$appointtime' and docname='$docname')";
	  $result=mysqli_query($connect,$s);
	  if(mysqli_num_rows($result)>0)
	  {
      while ($row=mysqli_fetch_assoc($result))
	  {
		  if($appointdate==$row['appointdate'] and $appointtime==$row['appointtime'] and $docname==$row['docname']) 
		  {
				 echo "<script>alert('appointment slot not vacant');</script>";
		  }
	
	  }
	  }
		  
	  else
{
     $sql="INSERT INTO appoint(patname,patemail,gender,phone,appointdate,appointtime,docname) VALUES ('$patname' ,'$patemail','$gender','$phone','$appointdate','$appointtime','$docname')";
	if(mysqli_query($connect,$sql))
	{
   echo "<script>alert('Appointment fixed !');</script>";
   echo "<script>window.open('index.php','_self');</script>";
	}
	else
	{
  echo "Error: " . $sql . "<br>" . mysqli_error($connect);
       }
}
}
?>
<?php
}
else
{
	echo "<h1 style='color:blue; padding:100px; font-family:Yu Mincho Demibold;'><center><b>Hello Visitor! Please Login as Patient to Book Appointment <a href='patlogin.php'>Here</a></center></b>";
}
?>
</body>
</html>