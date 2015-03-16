

<?php
//image_fetcher_module 
$count=101;
$t=time();
$keyword="happy_face_baby";
function get_images($query){
    $url = 'http://ajax.googleapis.com/ajax/services/search/images?v=1.0&q=';
    //enter your API key here
    $key = 'your-key-here';
    $url .= urlencode($query);
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $data = curl_exec($curl);
    curl_close($curl);
    //decoding request
    $result = json_decode($data, true);

    return $result;
}

$images = get_images($keyword);

//echo "<img src='";
//print_r($images['responseData']['results'][0]['url']);
//echo "' width='200px;' /></br>";
//echo "<img src='";
//print_r($images['responseData']['results'][1]['url']);
//echo "' width='200px;' /></br>";
//echo "<img src='";
//print_r($images['responseData']['results'][2]['url']);
//echo "' width='200px;' /></br>";

copy($images['responseData']['results'][0]['url'], 'image/img_'.$keyword.'_'.$t.'_'.$count.'.jpg');
$count++;
copy($images['responseData']['results'][1]['url'], 'image/img_'.$keyword.'_'.$t.'_'.$count.'.jpg');
$count++;
copy($images['responseData']['results'][2]['url'], 'image/img_'.$keyword.'_'.$t.'_'.$count.'.jpg');
$count++;
echo'success';
?>