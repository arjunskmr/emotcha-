<?php

$servername = "localhost";
$username = "root";
$password = "limboda";

// Create connection
$conn = mysql_connect ($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    
} 
echo "Connected successfully";
mysql_select_db('emotcha_db');
$val = mysql_query('select 1 from `active_table`');

if($val !== FALSE)
{
   print("Exists");
}else{
   print("Doesn't exist");
}
$conn->close();

?>



