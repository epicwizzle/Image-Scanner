<?php
    $images = filter_var($_FILES['image']['name'], FILTER_SANITIZE_SPECIAL_CHARS);
    $submit = filter_var($_POST['submit'], FILTER_SANITIZE_SPECIAL_CHARS);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
        $target_file = basename($images);
        $uploadOk = true;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = false;
        }
        if($submit) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = true;
            } else {
                echo "File is not an image.";
                $uploadOk = false;
            }
        }
        if ($uploadOk == false) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                //echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
                echo "<img src='" . $images . "'>"; 
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }


    }
?>
