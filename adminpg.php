<?php
include("db.php");
?>
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
<link rel="stylesheet" href="css/adminpg.css" type="text/css">
</head>
<body onload="noback();" onpageshow="if(event.persisted)noback();" onunload="" oncontextmenu="return false;" >
<h1>Welcome Admin</h1>
<center><a style='color:white; font-size:35px; font-weight:bolder;'><u>DASHBOARD</u></center>	
<form>
<center> 
<a href="addd.php"><input class="buttons" type="button" value="Add Doctors" name="Add"></a>
<a href="Viewalldr.php"><input class="buttons" type="button" value="View all & Update" name="View"></a>
<br>
<br> 
<br>
<!--<a href="upcoming.php"><input class="buttons" type="button" value="Upcoming Appointments" name="upcoming"></a>   
<a href="viewall.php"><input class="buttons" type="button" value="View All Appointments" name="all"></a>-->
<br>
<br><br>
<a href="logout.php"><input class="buttons" type="button" value="Logout"></a>
 </center>
 </form>
</body>
</html>