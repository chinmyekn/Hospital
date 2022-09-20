<?php require 'db.php';?>
<html>
<head>
 <title>Add Doctor</title>
 <link rel="stylesheet"href="css/app.css" type="text/css">
 </head>
 <body>
<form method="post" enctype="multipart/form-data">
<h3 style="font-size:52px;text-align:center;color:orange;"><u>Add Doctor</u></h3>
<h2><center><label for="Name:"> Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="FirstName" type="text" name="docname" placeholder="Enter the User Name" required></center></h2>
<h2><center><label for="E-Mail:">E-Mail ID:</label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="email" type="text" name="docemail" placeholder="demo@gmail.com" ></center></h2>
<h2><center><label for="designation:">Designation:</label>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="designation" placeholder="Enter Designation"><center></h2>
<h2><center><label for="info:">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Doctor Information:</label>
&nbsp;<input type="text" name="info" placeholder="Enter Doctor Information"></center></h2>
<h2><center><label>Doctor Image:</label>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="doctorimage" required></center></h2>
<br>
<center><input class="submit" type="submit" value="SUBMIT" id="submit" name="register"></center>
</form>
<h3><a href="adminpg.php" style="font-size:24px;"><b><< Go back to Admin page</b></a></h3>
</body>
</html>
<?php 
if(isset($_POST['register']))
{
$docname=$_POST['docname'];
$docemail=$_POST['docemail'];
$designation=$_POST['designation'];
$info=$_POST['info'];
$dimage=$_FILES['doctorimage']['name'];
$dimagetmp=$_FILES['doctorimage']['tmp_name'];
move_uploaded_file($dimagetmp,"dbimg/$dimage");
     $sql1="INSERT INTO doctor(doctorname,designation,doctorimage,docinfo) VALUES ('$docname' ,'$designation','$dimage','$info')";
	 $sql2="INSERT INTO doclogin(docemail) VALUES ('$docemail')";
		if(mysqli_query($connect,$sql1))
		{
			if(mysqli_query($connect,$sql2))
			{
		echo "<script>alert('Successfully Inserted new doctor!!');</script>";
		echo"<script>window.open('adminpg.php','_self')</script>";
			}
		}
		else
			{
		echo "Error: " . $sql . "<br>" . mysqli_error($connect);
			}
	
}
?>