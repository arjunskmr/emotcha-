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
    // if(($r[0]["emotion_id"]==$posted_data["txt1"])&&($r[1]["emotion_id"]==$posted_data["txt2"])&&($r[2]["emotion_id"]==$posted_data["txt3"])&&($r[3]["emotion_id"]==$posted_data["txt4"]))
    // {
    //     print_r("success");
    //     die();
    // }
    // else{
    //  print_r("faliure");
    //  print_r($r[0]["emotion_id"]);
    //  print_r($r[1]["emotion_id"]);
    //  print_r($r[2]["emotion_id"]);
    //  print_r($r[3]["emotion_id"]);
    //  print_r($posted_data["id1"]);
    //  print_r($posted_data["id2"]);
    //  print_r($posted_data["id3"]);
    //  print_r($posted_data["id4"]);
    //  print_r($posted_data["txt1"]);
    //  print_r($posted_data["txt2"]);
    //  print_r($posted_data["txt3"]);
    //  print_r($posted_data["txt4"]);
    // }
    $coun=0;
    for($i=0;$i<4;$i++)
    {
        if($r[$i]["emotion_id"]==$posted_data["txt1"])
            {
                if($r[$i]["image_id"]==$posted_data["id1"])
                $coun++;
                continue;
            }

        if($r[$i]["emotion_id"]==$posted_data["txt2"])
            {if($r[$i]["image_id"]==$posted_data["id2"])
                $coun++;
                continue;
            }
        if($r[$i]["emotion_id"]==$posted_data["txt3"])
            {if($r[$i]["image_id"]==$posted_data["id3"])
                $coun++;
                continue;
            }
        if($r[$i]["emotion_id"]==$posted_data["txt4"])
            {if($r[$i]["image_id"]==$posted_data["id4"])
                $coun++;
                continue;
            }
        }
        if($coun==4)
        { print_r($coun);
          print_r("success");  
        }
        else{
            print_r($coun);
            print_r("fail");
        }


    // if(($r[0]["image_id"]==$posted_data["id1"]&&$r[0]["emotion_id"]!=$posted_data["txt1"])||(($r[1]["image_id"]==$posted_data["id2"]&&$r[1]["emotion_id"]!=$posted_data["txt2"]))||(($r[2]["image_id"]==$posted_data["id3"]&&$r[2]["emotion_id"]!=$posted_data["txt3"]))||(($r[3]["image_id"]==$posted_data["id4"]&&$r[3]["emotion_id"]!=$posted_data["txt4"])))
    // {  
    //     $count++;
    // }
     
     $val1 = mysqli_query($conn, 'delete from `active_table`');
    // if($count==0)
    // {print_r($r[3]["emotion_id"]);}
    
    // if($count!=0)
    // {print_r("faliure");}
    
?>