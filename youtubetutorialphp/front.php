<!DOCTYPE html>
<html>
    <body>

        <form action="front.php" method="post">
            <!-- name : <input type="text" name="name">
            <br>
            number: <input type="number" name="number"> -->
            numero uno : <input type="number" name="number1">
            <br>
            numero dos: <input type="number" name="number2">
            <br>
            palabra uno : <input type="text" name="text1">
            <br>
            <input type="submit" >
          
        </form>
        <br>
        <!-- tu nombre es: <?php echo $_GET["name"] ?> -->
        <!--<?php echo $_GET["number1"] + $_GET["number2"] ?>-->

        <?php 
        
            $numero1 = $_POST["number1"];
            $numero2 = $_POST["number2"];
            $texto1 = $_POST["text1"];

            echo $numero1;
            echo $numero2;
            echo $texto1;

        ?>
        
        

    </body>
</html>