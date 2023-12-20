<?php
    $images = filter_var($_FILES['image']['name'], FILTER_SANITIZE_SPECIAL_CHARS);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($images);
        $uploadOk = 1;
    }
?>
