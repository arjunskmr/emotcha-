
<?php
//image distortion module
if ($handle = opendir('image')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {
echo "$entry\n";
$image = imagecreatefromjpeg('image/'.$entry);
//imagefilter($image, IMG_FILTER_COLORIZE, -100, -100, -100);
imagefilter($image, IIMG_FILTER_PIXELATE, -100, -100, -100);

imagejpeg($image, 'image/'.$entry);
imagedestroy($image);
    }
    }

    closedir($handle);
}
?>