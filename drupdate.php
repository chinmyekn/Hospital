<?php require 'db.php';?>
<html>
<head>
  <title>Update Doctor</title>
  <link rel="stylesheet"href="css/app.css" type="text/css">
</head>
<body>
<h3 style="font-size:32px;text-align:center;color:green;">Update Doctor</h3>
<form method="post" action="" >
<div align="center">
<?php 
$doctorid=$_GET['doctorid'];
$s="SELECT * FROM doctor WHERE doctorid='$doctorid'";
	  $result=mysqli_query($connect,$s);
	  if(mysqli_num_rows($result)>0)
	  {
      while ($row=mysqli_fetch_assoc($result))
	  {
?>
<br>
<br><p class="input">Designation:</p>
  <input type="text" name="designation" placeholder="designation"><br>
<p class="input">Doctor-Email:</p>
 <input type="email" name="docemail" placeholder="Enter your email ID">
 <br>
 <br>
 <br>
 <center><input class="submit" type="submit" name="Register" value="Update"></center>
 <?php }
	  }
else{ echo "0 results";
}
?>
 </form>
 </body>
 </html>
 <?php
if(isset($_POST['Register']))
{
 $designation=$_POST['designation'];
  $docemail=$_POST['docemail'];
  // $sql="Update  doctor,doclogin SET d.designation='$designation',e.docemail='$docemail' from doctor d join doclogin e on d.doctorid=e.docid where doctorid='$doctorid'";
  //$sql="Update  doctor,doclogin SET doctor.designation='$designation',doclogin.docemail='$docemail' from doctor inner join doclogin on doctor.doctorid=doclogin.docid where doctorid='$doctorid'";
	//$sql="update doctor,doclogin  inner join doclogin on doctor.doctorid=doclogin.docid set doctor.designation='$designation' , doclogin.docemail='$docemail' where doctorid='$doctorid'";
	$sql="update doctor,doclogin set doctor.designation='$designation',doclogin.docemail='$docemail' where doctor.doctorid=doclogin.docid and doctorid='$doctorid'";
	if(mysqli_query($connect,$sql))
	{
   echo "<script>alert('Updated appointment !');</script>";
   echo "<script>window.open('Viewalldr.php','_self');</script>";
	}
	else
	{
  echo "Error: " . $sql . "<br>" . mysqli_error($connect);
       }

}
?>