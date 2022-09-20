<?php require 'db.php'; ?>
<?php
$sel = "SELECT *FROM doctor JOIN doclogin ON doctor.doctorid=doclogin.docid";
$run = mysqli_query($connect,$sel);
?>
<html>
<head>
<title>ViewAll</title>
</head>
<body>
<h3 style="font-size:32px;text-align:center;color:green;"><u>View All Doctor</u></h3> 
<table align="center" border='1'>
<tr align="center">
<td style="font-size:20px;color:black;">Id</td>
<td style="font-size:20px;color:black;">Name</td>
<td style="font-size:20px;color:black;">Designation</td>
<td style="font-size:20px;color:black;">Doctor-Email</td>
<td style="font-size:20px;color:black;">Update</td>
<td style="font-size:20px;color:black;">Delete</td>
</tr>
<?php 
 if(mysqli_num_rows($run)>0)
 {
	 while($row= mysqli_fetch_assoc($run)){
		 ?>
		 <tr>
		 <td style="font-size:20px;color:purple;"><?php echo $row['doctorid'];?></td>
		 <td style="font-size:20px;color:purple;"><?php echo $row['doctorname'];?></td>
		 <td style="font-size:20px;color:purple;"><?php echo $row['designation'];?></td>
		  <td style="font-size:20px;color:purple;"><?php echo $row['docemail'];?></td>
		 <td style="font-size:20px;color:purple;"><a href="drupdate.php?doctorid=<?php echo $row['doctorid'];?>">Update</a></td>
		  <td style="font-size:20px;color:purple;"><a href="drdelete.php?doctorid=<?php echo $row['doctorid'];?>">Delete</a></td>
		 </tr><?php 
	 }
 }
 else{
	 echo '0 results';
 }
 ?>
 </table>
 <p style="color:black;font-size:24px;"><a href="adminpg.php"><b><< Go Back To Admin Page</b></a></p>