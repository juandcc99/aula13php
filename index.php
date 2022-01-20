<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Constantes
    echo "<h2>Variables y constantes</h2>";
    define("DATO","un dato de ejemplo");
    echo "la constante DATO es " .DATO;

    // Expresiones
    echo "<h2>Expresiones</h2>";
    $numero=5;
    $numero++;
    echo "<p>El numero es " .$numero. "</p>";//6
    echo "<p>El numero es " .$numero++. "</p>";//7 pero muestra 6
    
    //Operadores
    echo "<h2>Operadores</h2>";
    $numero1=10;
    $numero2=5;
    if($numero1 >= $numero2)
        echo "<p>El primer numero es mayor</p>";
    else
        echo "<p>El primer numero es menor</p>";
    
    $aprobado=true;
    if($aprobado)
        echo "<p>Has aprobado</p>";
    else
        echo "<p>Has suspendido</p>";

    $nota="8";
    if($nota == 8)
        echo "<p>Tu nota es ".$nota. " - notable</p>";
    else 
        echo "<p>Tu nota NO es un 8</p>";

    // Bucles
    echo "<h2>Estructuras de Control</h2>";

    for ($i=0;$i<=10;$i++)
        echo $i. " - ";
    $a=0;
    echo "<br>";
    while($a<=10)
        echo $a++. " - ";
    ?>


</body>
</html>