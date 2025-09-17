<?php
// ucwords: Convierte a mayúscula el primer carácter de cada palabra en una cadena.
$cadena = "hola mundo";
$cadenaUcwords = ucwords($cadena);
echo "ucwords: $cadenaUcwords<br>"; // Output: "Hola Mundo"

// strrev: Invierte una cadena.
$cadena = "Hola";
$cadenaReversa = strrev($cadena);
echo "strrev: $cadenaReversa<br>"; // Output: "aloH"

// str_repeat: Repite una cadena un número especificado de veces.
$cadena = "Hola";
$cadenaRepetida = str_repeat($cadena, 3);
echo "str_repeat: $cadenaRepetida<br>"; // Output: "HolaHolaHola"

// md5: Calcula el hash MD5 de una cadena.
$cadena = "Hola";
$cadenaMd5 = md5($cadena);
echo "md5: $cadenaMd5<br>"; // Output: "4d186321c1a7f0f354b297e8914ab240"
?>