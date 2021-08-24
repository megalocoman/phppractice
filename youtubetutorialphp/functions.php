<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        function decirHola(){
            echo "hola nino el felino<br>";
        }

        function decirHolaConNombre($nombre){
            echo "hola $nombre <br>";
        }

        function cube($num){
            return $num * $num * $num;
        }

        decirHola();
        decirHola();
        decirHola();

        decirHolaConNombre("gordito");
        decirHolaConNombre("gatoberto");

        echo "<br>";

        $cubeResult = cube(4);
        echo $cubeResult
    
    ?>
    
</body>
</html>