<?php

$imageFile = "imageFile.txt";

$fh = fopen($imageFile, "r");
$images = [];
while(!feof($fh)){
    $image = trim(fgets($fh));
    array_push($image, $images);    
}

for($i=0; $i<count($images); $i++){

    echo "<img src='" . $images[$i] . "'>"; 
}



?>