<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 

        $gatitos = array("nino", "chibo", "gorda", "miki");
        $gatitos[4] = "gatoberto";
        echo $gatitos[1];
        echo "<br>";
        echo count($gatitos);
        echo "<br>";

        $bebes = array("nino" => "cafe", "chibo" =>"babosa", "gorda" =>"gordo", "miki" =>"tuxedo");
        echo $bebes["nino"];


    ?>

</body>
</html>