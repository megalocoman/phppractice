<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        class Chef{
            function makeChicken(){
                echo "chicken made <br>";
            }

            function makeSalad(){
                echo "salad made <br>";
            }

            function makeSpecialDish(){
                echo "special made <br>";
            }
        }

        class italianChef extends Chef{

            function makePasta(){
                echo "pasta made <br>";
            }

        }

        $chef = new Chef();
        $chef->makeChicken();
        $italianchef = new italianChef();
        $italianchef->makePasta();
    ?>
    
</body>
</html>