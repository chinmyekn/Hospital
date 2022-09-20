<?php require 'db.php'; ?>
<html>
<head>
<script type ="text/javascript">
window.history.forward();
function noBack() 
{
	window.history.forward();
}
</script>
<title>ADMIN PAGE</title>
<link rel="stylesheet" href="css/adminlogin.css" type="text/css">
</head>
<form method="post" action="adminlogin.php">
<body  align="center" onload="noback();" onpageshow="if(event.persisted)noback();" onunload="">
 <h1>WELCOME ADMIN</h1>
 <br>
 <h2><?php echo @$_GET['logged_out'] ?></h2>
 <h2>Admin Email Id</h2>
 <input type="text" name="adminemail" placeholder="Enter your email ID">
 <br>
 <br>
 <h2>Password</h2>
 <input type="password" name="password" placeholder="Enter your Password">
 <br>
 <br><br>
 <input class="buttons" type="submit" value="Login" name="register"> 
 </form>
</body>
</html>
<?php
if(isset($_POST['register']))
{
	$email=$_POST['adminemail'];
	$pass=$_POST['password'];
	$sel_hos="select * from adminlogin where adminemail='$email' AND adminpassword='$pass'";
	$run_hos=mysqli_query($connect,$sel_hos);
	$flag_hos=mysqli_num_rows($run_hos);
	if($flag_hos==0)
	{
		echo"<script>alert('Wrong Email and Password!')</script>";
	}
	else
	{
	
		echo"<script>alert('logged in successfully!!!')</script>";
		echo"<script>window.open('adminpg.php?logged_in=You have logged in!','_self')</script>";
	}		
}
?>