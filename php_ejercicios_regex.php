//Realizar una expresión regular que detecte emails correctos.
//Realizar una expresion regular que detecte Curps Correctos
//ABCD123456EFGHIJ78.
//Realizar una expresion regular que detecte palabras de longitud mayor a 50
//formadas solo por letras.
//Crea una funcion para escapar los simbolos especiales.
//Crear una expresion regular para detectar números decimales.

<?php

$var ="#cualquier_-/.~\\cosa";
$var2 = "ver";

function variable($var){
    if(preg_match("/[.]/", $var))
    {
     echo "palabra no aceptada";
    } else {
     echo "palabra aceptada";
    }
    }

variable($var);
echo "\n";
variable($var2);
?>


