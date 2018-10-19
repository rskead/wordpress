<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dragons!</title>
</head>
<body>
    <h1>Look at dem dragons!!!!!!!!!!!!!</h1>
    
    <!-- ref: https://stackoverflow.com/questions/45853819/display-images-from-folder-in-table-using-php-html -->
    <?php
    $files = glob("images/*.*");
    for ($i = 0; $i < count($files); $i++) {
        $image = $files[$i];
        $supported_file = array(
            'gif',
            'jpg',
            'jpeg',
            'png'
        );

        $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
        if (in_array($ext, $supported_file)) {
            echo basename($image);
    echo '<img src="' . $image . '" alt="Random image" ,width=100px, height=100px /><br>';
    } else {
    continue;
    }
    }
    ?>
</body>
</html>