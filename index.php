<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Game</title>
</head>
<body>
    <?php
    
    echo "<h2>Variables y constantes</h2>";
    define("dato","un dato de ejemplo");
    echo "la constante dato es ". dato;
    $numero=5;
    $ciudad="Madrid";
    $numero++;
    echo "<p>el numero es ".$numero. "</p>";
    echo "<p>el numero es ".$numero++. "</p>";
    echo "<hr>";
    echo "<h2>Operadores</h2>";

    $numero1=10;
    $numero2=15;

    if($numero1>=$numero2){
        echo "<p> el primer numero es mayor </p>";
    }
    else {
        echo "<p> el primer numero es menor</p>";
    }

    $aprobado=true;

    if(!$aprobado){
        echo "<p>has aprobado</p>";
    }
    else{
        echo "<p>suspenso por gilipollas</p>";
    }

    $nota="8";
    if($nota===8){
        echo "<p>tu nota es un 8</p>";
    }
    else{
        echo "<p>tu nota no es un 8</p>";
    }


    echo "<hr>";
    echo "<h2>Estructura de control</h2>";

    for ($i=0;$i<=10;$i++){

        echo $i. "-";

    }
    echo "<br>";

    $a=0;
    while($a<=10){
        echo $a++."--";
    }
    echo "<br>";
        echo "<img width=200px src=https://vangogh.teespring.com/v3/image/J9ZXLZM0gwAVQP6Roe0oJsklu2U/960/1120.jpg>";
    ?>


</body>
</html>