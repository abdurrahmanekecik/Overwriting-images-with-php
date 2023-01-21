<?php
 $image = "assets/website-image/image.jpg";
 $font = "assets/fonts/kalam-bold.ttf"; 
 $shadow = "true";
 $name = $_GET['name'];
 if(empty($name)) {
    $text = "Write a text!"; }
 else {
    $text = "$name"; }
    
 $write_image = imagecreatefromjpeg("$image");
 $black = imagecolorallocate($write_image, 88, 88, 87);
 if ($shadow == "true") {
 imagettftext($write_image, 44, 0, 553, 1126, $gray, $font, $text); 
 }
 imagettftext($write_image, 44, 0, 552, 1125, $black, $font, $text);
    $surname = $_GET['surname'];
 if(empty($surname)) {
    $text2 = "Write a text!"; }
 else {
    $text2 = "$surname"; }
    
 $write_image2 = imagecreatefromjpeg("$image2");
 $black = imagecolorallocate($write_image, 88, 88, 87);
 if ($shadow == "true") {
 imagettftext($write_image, 44, 0, 602, 1260, $gray, $font, $text2); 
 }
 imagettftext($write_image, 44, 0, 601, 1259, $black, $font, $text2);
    $e_mail = $_GET['e_mail'];
 if(empty($e_mail)) {
    $e_mail = "Write a text!"; 
}
 else {
    $e_mail = "$e_mail"; }
    $telephone = $_GET['telephone'];
 if(empty($telephone)) {
    $telephone = "Write a text!"; 
}
 else {
    $telephone = "$telephone"; 
}
 $uuid = uniqid();
 $url = imagepng($write_image, "data-images/".$uuid.".png");
 imagedestroy($write_image);
 $url =  "https://{$_SERVER['HTTP_HOST']}/php-image-project/data-images/".$uuid.".png";
 $txt = "$name,   $surname,       $e_mail,       $telephone";
 $txt = $txt."\n" ;
 file_put_contents("data.txt", $txt, FILE_APPEND);
?>