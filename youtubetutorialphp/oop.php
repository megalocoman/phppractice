<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Book{
            var $title;
            var $author;
            var $pages;

            function __construct($aTitle, $aAuthor, $aPages){
                
                $this -> title = $aTitle;
                $this -> author = $aAuthor;
                $this -> pages = $aPages;
                echo "objeto creado<br>";
            }
        }

        
        // $book1 = new Book;
        // $book1->title = "libro felino";
        // $book1->author = " nino el felino";
        // $book1->pages =1000;

        // $book2 = new Book;
        // $book2->title = "1849";
        // $book2->author = " jorge orwil";
        // $book2->pages =20;

        $book1 = new Book("libro felino", " nino el felino", 1000 );
        $book2 = new Book("1849", " jorge orwil", 20);

        echo $book1->author."<br>";
        echo $book1->title."<br>";
        echo $book1->pages."<br>";

        echo $book2->author."<br>";
        echo $book2->title."<br>";
        echo $book2->pages."<br>";
        


    ?>
</body>
</html>