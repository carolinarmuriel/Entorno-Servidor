<!-- 242matematicas.php: Añade las siguientes funciones:
digitos(int $num): int → devuelve la cantidad de dígitos de un número.
digitoN(int $num, int $pos): int → devuelve el dígito que ocupa, empezando por la izquierda, la posición $pos.
quitaPorDetras(int $num, int $cant): int → le quita por detrás (derecha) $cant dígitos.
quitaPorDelante(int $num, int $cant): int → le quita por delante (izquierda) $cant dígitos. -->
<?php
    function digitos(int $num): int { // cantidad de digitos
        return strlen((string)$num);
    }
    function digitoN(int $num, int $pos): int { // digito en la posicion
        return (int)substr((string)$num, $pos, 1);
    }
    function quitaPorDetras(int $num, int $cant): int { // quita por detrás
        return (int)substr((string)$num, 0, strlen((string)$num) - $cant);
    }
    function quitaPorDelante(int $num, int $cant): int { // quita por delante
        return (int)substr((string)$num, $cant);
    }
    $num = 695695; // el número a utilizar
    echo "Cantidad de digitos: " . digitos($num) . "<br>"; // 6
    echo "Digito en la posicion 3: " . digitoN($num, 2) . "<br>"; // 5
    echo "Quitar por detrás 3 digito: " . quitaPorDetras($num, 3) . "<br>";
    echo "Quitar por delante 3 digito: " . quitaPorDelante($num, 3) . "<br>";
    
?>