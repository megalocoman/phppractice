<?php

    $x = 5;
    $y = 10;

    function suma(){
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];

    }

    suma();
    echo $z."<br>";

    echo $_SERVER['PHP_SELF']."<br>";
  //  echo $_SERVER['GATEWAY_INTERFACE']."<br>";
    // echo $_SERVER['SERVER_ADDR']."<br>";
    echo $_SERVER['SERVER_PROTOCOL']."<br>";
    echo $_SERVER['REQUEST_TIME']."<br>";
    echo $_SERVER['SERVER_SOFTWARE']."<br>";
    echo $_SERVER['SCRIPT_NAME']."<br>";


?>