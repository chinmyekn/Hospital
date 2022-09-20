<?php require 'db.php';?>

<?php 
$doctorid=$_GET['doctorid'];
$s="DELETE doctor,doclogin from doctor inner join doclogin on doctor.doctorid=doclogin.docid  WHERE doctorid='$doctorid'";

	  if (mysqli_query($connect,$s))
	  {
		  header('location:Viewalldr.php');
	  }
	  else{
		  echo ("Error in deleting "). mysqli_connect_error();
	    }
?>