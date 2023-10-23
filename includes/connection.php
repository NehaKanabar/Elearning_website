<?php
error_reporting (E_ERROR | E_WARNING | E_PARSE);
ini_set('display_errors', 1);
$db_username = "root";  
$db_password = "";  
$db_name = "project_2023";   
$db_host = "localhost";
$sitetitle = "";
$con_website=mysqli_connect($db_host, $db_username, $db_password) or die ('cannot connect to database');
mysqli_select_db($con_website,$db_name) or die ('cannot connect to database'.mysqli_error($con_website));
mysqli_query($con_website,"SET CHARACTER SET utf8");
mysqli_query($con_website,"SET NAMES utf8");

$sitepath="http://localhost/project/";
$datapath="http://localhost/project/";

?>