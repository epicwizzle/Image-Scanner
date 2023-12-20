<?php
    $images = filter_var($_FILES['image']['name'], FILTER_SANITIZE_SPECIAL_CHARS);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($images);
        $uploadOk = 1;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Scanner</title>
</head>
<body>
<form action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" enctype="multipart/form-data">
    <input type="file" name="image" accept="image/*">
    <input type="submit" value="Upload">
</form>

</body>
</html>