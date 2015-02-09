<?php

$servername = "localhost";
$username = "root";
$password = "limboda";


if( !$_GET["apikey"] || !$_GET["apisecret"] )
  {    
  	 echo "<br>--missing appid or app secret--<br>"
     // echo "<br>". $_GET['apikey']. "<br />";
     // echo "-- ". $_GET['apisecret']. " --";
     
  }
// Create connection
$conn = mysql_connect ($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    
} 
echo "Connected successfully";
echo "$apikey";
echo "$apisecret";
mysql_select_db('emotcha_db');
$val = mysql_query('select * from `image_table` ORDER BY RAND() LIMIT 2');

while($row = mysql_fetch_array($val, MYSQL_ASSOC))
{
    echo "{$row['image_id']}  <br> ".
         " {$row['image_link']} <br> ".
         " {$row['emotion_id']} <br> ".
         " {$row['emotion_name']} <br> ".
         "--------------------------------<br>";
} 
echo "Fetched data successfully\n";



$conn->close();

?>



