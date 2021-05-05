<?php

    // Crear una multiples usuario resibidos por html y verificaran si la opcion existe
    // mostrar un mensaje diferente para cada uno de ellos Ejemplo 'netflix'
    // Mostrar las opciones que no existen usando switch 

      
    $opcion = (int) (isset($_REQUEST['opciones'])) ? $_REQUEST['opciones'] : 0;
    echo "<br>";
    echo "<br>";
    
    switch ($opcion) {
        case 1: echo "Hola José, eres el usuario  de Movistar play"; goto pasar;
        case 2: echo "Hola Eunice, eres el usuario  de Movistar play"; goto pasar;
        case 3: echo "Hola Valerie, eres el usuario  de Movistar play"; goto pasar;
        case 4: echo "Hola Stiven, eres el usuario  de Movistar play"; goto pasar;
        case 5: echo "Hola José (Hijo), eres el usuario  de Movistar play"; goto pasar;
            pasar:
            echo "<br> Eres la opción $opcion y estás en un switch";echo "<br>";
            echo "<br>";
            break;
        default:
            echo "<br>";
            echo "<br>";
            echo "La opcion $opcion no tiene un usario registrado";
        break;
    }
    echo '<hr><b><a href="index.html">Volver a ejecutar</b></a>';
   
?>