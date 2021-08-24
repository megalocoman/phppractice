<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="checkbox.php" method="post">
       apples: <input type="checkbox" name="fruits[]" value= "apples"><br>
       platano: <input type="checkbox" name="fruits[]" value= "platano"><br>
       frutilla: <input type="checkbox" name="fruits[]" value= "frutilla"><br>
       <input type="submit" name="submit">
    </form>

    <?php 
        $fruits = $_POST["fruits"];
        echo $fruits[1];
    
    ?>
</body>
</html>