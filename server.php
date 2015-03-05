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

//echo "Fetched data successfully\n";

//print json_encode($r[0]);
$emo_name =$r[0]["emotion_name"];
$emo_id = $r[0]["emotion_id"];
$image_id = $r[0]["image_id"];
$image_link = $r[0]["image_link"]
$emo_name1 =$r[1]["emotion_name"];
$emo_id1 = $r[1]["emotion_id"];
$image_id1 = $r[1]["image_id"];
$image_link1 = $r[1]["image_link"]

echo json_encode(array(
    array('name' => 'emo_name', 'data' => $emo_name),
    array('name' => 'emo_id', 'data' => $emo_id),
    array('name' => 'image_id', 'data' => $image_id),
    array('name' => 'image_link', 'data' => $image_link),
    array('name' => 'emo_name', 'data' => $emo_name1),
    array('name' => 'emo_id', 'data' => $emo_id1),
    array('name' => 'image_id', 'data' => $image_id1),
    array('name' => 'image_link', 'data' => $image_link1)

));


$conn->close();

?>



