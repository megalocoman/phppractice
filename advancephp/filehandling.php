<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // echo readfile("texto.txt")."<br>";
        // $myfyle = fopen("texto.txt", "r") or die("can't open texto.txt");
        $myfyle = fopen("texto.txt", "w") or die("can't open texto.txt");
        // while(($buffer = fgets($myfyle)) !== false){
        //     echo $buffer."<br>";

        // }
        // echo fgets($myfyle, filesize("texto.txt"));
        // fclose($myfyle);
        // echo "******"."<br>";
        // $myfyle = fopen("texto.txt", "r") or die("can't open texto.txt");
        // while(!feof($myfyle)){
        //     echo fgets($myfyle)."<br>";
        // }
        // fclose($myfyle);
        $txt="holi soy nino\n";
        fwrite($myfyle, $txt);
        $txt=" y soy naranjito\n";
        fwrite($myfyle, $txt);
        fclose($myfyle);
    ?>
</body>
</html>