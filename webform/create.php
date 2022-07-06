<?php
/** 
Autor:      Edward
Professor:  Iyad Koteich
College:    Trebas Institute
Date:       2022-07-05
Website:    https://ed2ti.com/
**/
$email              = $_REQUEST['email'];
$password           = $_REQUEST['password'];
$confirmPassword    = $_REQUEST['confirmPassword'];

// Checking passwords //
if($password!=$confirmPassword){
  header('Location: index.php?error=login');die();
}else{
  /** DATABASE CONFIG **/
  $database = 'trebas';
  $dbuser   = 'admin';
  $dbpass   = 'password';
  $dbhost   = 'database-trebas-01.c9c0jprqcw9y.us-east-1.rds.amazonaws.com';
  
  $mysqli = new mysqli($dbhost,$dbuser,$dbpass,$database);
  
  /** Check connection **/
  if ($mysqli -> connect_errno) {
    header('Location: index.php?error=connection');die();
  }
  
  $sValidate  = "SELECT * FROM users WHERE email = '$email'";
  $qValidate  = $mysqli->query($sValidate);
  $row_cnt    = $qValidate->num_rows;
  if ($row_cnt>0){
    header('Location: login.php?error=account');die();
  }else{
    $firstName  = $_REQUEST['fname'];
    $lastName   = $_REQUEST['lname'];
    $password   = md5($password);
    $phone      = $_REQUEST['phone'];
    $sCreate    = "INSERT INTO users (firstName,lastName,password,email,phone) VALUES ('$firstName','$lastName','$password','$email','$phone')";
    $qCreate    = $mysqli->query($sCreate);
    header('Location: login.php?error=congats');die();
  }

}

?>
