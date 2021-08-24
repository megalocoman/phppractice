<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $cookie_name = "user";
        $cookie_value = "nino el felino";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    ?>

    <!-- <?php 
        if(!isset($_COOKIE[$cookie_name]){

        })
    ?> -->
</body>
</html>