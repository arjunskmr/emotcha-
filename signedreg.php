<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "limboda";
$length = 30;
$call= 500;

$appid = substr(str_shuffle("012345fdsfsfsf6789aaaaaabcdefghijklmasdadadnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
$appsecret = substr(str_shuffle("0123ssdaasdadasdad456789abcdefghasdada2342ijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
$uid = substr(str_shuffle("0123ssdaasda"), 0, 5);

$conn = mysqli_connect ($servername, $username, $password, "emotcha_db");

  $userName = $_POST['uname'];
  $email = $_POST['email'];
  $password =  $_POST['pass'];
  $cpassword =  $_POST['cpass'];
  $query = "INSERT INTO user_cred(username,email,password,appid,appsecret,calls) VALUES ('$userName','$email','$password','$appid','$appsecret','$call')";
  $data = mysqli_query($conn, $query);
  if($data)
  {
  echo "YOUR REGISTRATION IS COMPLETED...";
  }


?>

