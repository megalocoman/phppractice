<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        date_default_timezone_set("America/New_York");
        echo "Today is: ".date("Y/m/d")."<br>";
        echo "Today is: ".date("Y.m.d")."<br>";
        echo "Today is: ".date("d-m-y")."<br>";
        echo "the time is: ".date("d-m-y H:i:s")."<br>";
        $d= mktime(21, 14, 54, 8, 12, 2014);
        echo "the day is: ".date("y-m-d H:i:sa", $d)."<br>";
        $e = strtotime("yesterday");
        echo "date is: ".date("Y-m-d H:i:s", $e)."<br>"

    ?>
    
</body>
</html>