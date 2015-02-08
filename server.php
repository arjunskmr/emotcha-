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
$val = mysql_query('select * from `active_table`');

while($row = mysql_fetch_array($val, MYSQL_ASSOC))
{
    echo "{$row['session_id']}  <br> ".
         " {$row['image_name']} <br> ".
         " {$row['image_id']} <br> ".
         " {$row['emotion_name']} <br> ".
         "--------------------------------<br>";
} 
echo "Fetched data successfully\n";



$conn->close();

?>



