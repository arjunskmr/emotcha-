<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);

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
$conn = mysqli_connect ($servername, $username, $password, "emotcha_db");

// Check connection

// echo "<br>". $_GET['apikey']. "<br />";
// echo "-- ". $_GET['apisecret']. " --<br>";
// echo "Connected successfully";
// echo "$apikey";
// echo "$apisecret";

$val = mysqli_query($conn, 'select * from `image_table` ORDER BY RAND() LIMIT 4');

while($row = mysqli_fetch_array($val, MYSQL_ASSOC))
{
    // echo "{$row['image_id']}  <br> ".
    //      " {$row['image_link']} <br> ".
    //      " {$row['emotion_id']} <br> ".
    //      " {$row['emotion_name']} <br> ".
    //      "--------------------------------<br>";
    $r[]=$row;
    
} 
$my_array = array(0,1,2,3);

shuffle($my_array);
$e = $r[0]["emotion_name"];
$f = $r[1]["emotion_name"];
$g = $r[2]["emotion_name"];
$h = $r[3]["emotion_name"];
//echo "Fetched data successfully\n";

//print json_encode($r[0]);
$emo_name =$r[$my_array[0]]["emotion_name"];
$emo_id = $r[0]["emotion_id"];
$image_id = $r[0]["image_id"];
$image_link = $r[0]["image_link"];
$emo_name1 =$r[$my_array[1]]["emotion_name"];
$emo_id1 = $r[1]["emotion_id"];
$image_id1 = $r[1]["image_id"];
$image_link1 = $r[1]["image_link"];
$emo_name2 =$r[$my_array[2]]["emotion_name"];
$emo_id2 = $r[2]["emotion_id"];
$image_id2 = $r[2]["image_id"];
$image_link2 = $r[2]["image_link"];
$emo_name3 =$r[$my_array[3]]["emotion_name"];
$emo_id3 = $r[3]["emotion_id"];
$image_id3 = $r[3]["image_id"];
$image_link3 = $r[3]["image_link"];
mysqli_query($conn, "INSERT INTO active_table VALUES ('session101','$emo_id','$e');");
mysqli_query($conn, "INSERT INTO active_table VALUES ('session101','$emo_id1','$f');");
mysqli_query($conn, "INSERT INTO active_table VALUES ('session101','$emo_id2','$g');");
mysqli_query($conn, "INSERT INTO active_table VALUES ('session101','$emo_id3','$h');");
echo json_encode(array('emo_name' => $emo_name , 'emo_id' => $emo_id , 'image_id' => $image_id , 'image_link' => $image_link , 'emo_name1' => $emo_name1 , 'emo_id1' => $emo_id1 , 'image_id1' => $image_id1 , 'image_link1' => $image_link1 , 'emo_name2' => $emo_name2 , 'emo_id2' => $emo_id2 , 'image_id2' => $image_id2 , 'image_link2' => $image_link2 ,'emo_name3' => $emo_name3 , 'emo_id3' => $emo_id3 , 'image_id3' => $image_id3 , 'image_link3' => $image_link3));


$conn->close();

?>



