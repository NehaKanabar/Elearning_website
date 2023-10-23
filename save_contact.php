<?php
session_start();
require("includes/connection.php");

 $first_name=$_POST["name"];
 $number=$_POST["number"];
 $email=$_POST["email"];
$message=$_POST["message"];


$qry="INSERT INTO `contact_inquiry` (`name`,`number`,`email`,`message`)";
$qry.=" VALUES ('".$first_name."','".$number."','".$email."','".$message."')";
mysqli_query($con_website,$qry)or die("cannot insert into blogcomment ".mysqli_error($con_website)." ".$qry);

//$_SESSION["enqiry_Success"]=" Thank you ! Your Comment Is Sucessfully Submited.";
print "<META http-equiv='refresh' content=0;URL='".$sitepath."contact.php>";	
exit;
?>