<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);
$servername = "localhost";
$username = "root";
$password = "limboda";
$conn = mysqli_connect ($servername, $username, $password, "emotcha_db");
$val = mysqli_query($conn, 'select * from `active_table`');
while($row = mysqli_fetch_array($val, MYSQL_ASSOC))
{
    $r[]=$row;
    
} 
$count=0;
  
    $posted_data = array();
    if (!empty($_POST['json'])) {
        $posted_data = json_decode($_POST['json'], true);
       
    }
    if(($r[0]["image_id"]==$posted_data["id1"]&&$r[0]["emotion_id"]!=$posted_data["txt1"])||(($r[1]["image_id"]==$posted_data["id2"]&&$r[1]["emotion_id"]!=$posted_data["txt2"]))||(($r[2]["image_id"]==$posted_data["id3"]&&$r[2]["emotion_id"]!=$posted_data["txt3"]))||(($r[3]["image_id"]==$posted_data["id4"]&&$r[3]["emotion_id"]!=$posted_data["txt4"])))
    {  
        $count++;
    }
     if($r[0]["emotion_id"]!=$posted_data["txt1"])
    {  
        $count++;
    }
     if($r[1]["emotion_id"]!=$posted_data["txt2"])
    {  
        $count++;
    }
     if($r[2]["emotion_id"]!=$posted_data["txt3"])
    {  
        $count++;
    }
    if($r[3]["emotion_id"]!=$posted_data["txt4"])
    {  
        $count++;
    }
    
    
    $val1 = mysqli_query($conn, 'delete from `active_table`');
    if($count==0)
    {print_r("http://54.186.63.237/emotcha-/bypass.html");}
    
    if($count!=0)
    {print_r("faliure");}
    
?>