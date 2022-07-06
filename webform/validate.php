<?php
/** 
Autor:      Edward
Professor:  Iyad Koteich
College:    Trebas Institute
Date:       2022-07-05
Website:    https://ed2ti.com/
**/
$email              = $_REQUEST['mail'];
$password           = $_REQUEST['password'];

/** DATABASE CONFIG **/
$database = 'trebas';
$dbuser   = 'admin';
$dbpass   = 'password';
$dbhost   = 'database-trebas-01.c9c0jprqcw9y.us-east-1.rds.amazonaws.com';

$mysqli = new mysqli($dbhost,$dbuser,$dbpass,$database);
  
/** Check connection **/
if ($mysqli -> connect_errno) {
  header('Location: login.php?error=connection');die();
}
$password   = md5($password);
$sValidate  = "SELECT * FROM users WHERE email = '$email' and password='$password'";
$result     = $mysqli->query($sValidate);
$row_cnt    = $result->num_rows;
if ($row_cnt==0){
  header('Location: login.php?error=wrong');die();
}else{
  session_start();
  $row                    = $result->fetch_assoc();
  $_SESSION['user_name']  = $row['firstName'];
  header('Location: logged.php');die();
}



?>