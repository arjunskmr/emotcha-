<?php

$servername = "localhost";
$username = "root";
$password = "limboda";


if( !$_GET["apikey"] || !$_GET["apisecret"] )
  {    
  	 echo "<br>--missing appid or app secret--<br>";
      
     exit();
  }
 
 if( ($_GET["apikey"]!="asdasd" )|| ($_GET["apisecret"] !="asdasdasd") )
  {    
  	 echo "<br>--incorrect appid or app secret--<br>";
      
     exit();
  }
 
// Create connection
$conn = mysql_connect ($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    
} 
// echo "<br>". $_GET['apikey']. "<br />";
// echo "-- ". $_GET['apisecret']. " --<br>";
// echo "Connected successfully";
// echo "$apikey";
// echo "$apisecret";
mysql_select_db('emotcha_db');
$val = mysql_query('select * from `image_table` ORDER BY RAND() LIMIT 2');

while($row = mysql_fetch_array($val, MYSQL_ASSOC))
{
    // echo "{$row['image_id']}  <br> ".
    //      " {$row['image_link']} <br> ".
    //      " {$row['emotion_id']} <br> ".
    //      " {$row['emotion_name']} <br> ".
    //      "--------------------------------<br>";
    $r[]=$row;
    
} 
// echo "Fetched data successfully\n";
<<<<<<< HEAD
print json_encode($r[]);
=======
print json_encode($r[0]);echo '<br>';
print json_encode($r[1]);
>>>>>>> 461214dba00cd9de6b2d0e90ed92f5b1a553a01e


$conn->close();

?>



