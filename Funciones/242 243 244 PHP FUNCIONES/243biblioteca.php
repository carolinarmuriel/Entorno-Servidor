<!-- 243biblioteca.php: crea un archivo con funciones para sumar, restar, multiplicar y dividir dos números. -->
 <?php  
    function sumar (int $num1, int $num2): int {
        return $num1 + $num2;
    }
    function restar (int $num1, int $num2): int {
        return $num1 - $num2;
    }
    function multiplicar(int $num1, int $num2): int {
        return $num1 * $num2;
    }
    function dividir(int $num1, int $num2): float {
        return $num1 / $num2;
    }
    $num1 = 10;
    $num2 = 5;
    echo "Suma: " . sumar($num1, $num2) . "<br>";
    echo "Resta: " . restar($num1, $num2) . "<br>";
    echo "Multiplicación: " . multiplicar($num1, $num2) . "<br>";
    echo "División: " . dividir($num1, $num2) . "<br>";

    ?>