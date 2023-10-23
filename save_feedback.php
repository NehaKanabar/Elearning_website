<?php
session_start();
require("includes/connection.php");

 $first_name=$_POST["fullName"];
 $email=$_POST["email"];
$message=$_POST["message"];
$gender=$_POST["gender"];


$qry="INSERT INTO `feedback` (`name`,`email`,`gender`,`message`)";
$qry.=" VALUES ('".$first_name."','".$email."','".$gender."','".$message."')";
mysqli_query($con_website,$qry)or die("cannot insert into blogcomment ".mysqli_error($con_website)." ".$qry);

//$_SESSION["enqiry_Success"]=" Thank you ! Your Comment Is Sucessfully Submited.";
print "<META http-equiv='refresh' content=0;URL='".$sitepath."feedback.php>";	
exit;
?>