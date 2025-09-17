<!-- 262quinielas.php: Crea las siguientes funciones:
quinigol() : array → Genera un array multidimensional con 6 resultados aleatorios con combinaciones [012M, 012M].
quiniela() : array → Genera un array con una combinación de quiniela generada de manera aleatoria: 14 resultados con 1X2 y el pleno al quince con [012M, 012M].
tabla(array $quiniela) : string → transforma un array de una quniela en una tabla HTML. -->
<?php

// Función para generar un array multidimensional con 6 resultados aleatorios de Quinigol
function quinigol() {
    $resultados = [];
    $opciones = ['0', '1', '2', 'M'];
    
    for ($i = 0; $i < 6; $i++) {
        $resultado = [
            $opciones[array_rand($opciones)],
            $opciones[array_rand($opciones)]
        ];
        $resultados[] = $resultado;
    }
    
    return $resultados;
}

// Función para generar un array con una combinación de Quiniela
function quiniela() {
    $resultados = [];
    $opcionesQuiniela = ['1', 'X', '2'];
    $opcionesPleno = ['0', '1', '2', 'M'];
    
    // Generar 14 resultados de 1X2
    for ($i = 0; $i < 14; $i++) {
        $resultados[] = $opcionesQuiniela[array_rand($opcionesQuiniela)];
    }
    
    // Generar el pleno al quince con [012M, 012M]
    $plenoAlQuince = [
        $opcionesPleno[array_rand($opcionesPleno)],
        $opcionesPleno[array_rand($opcionesPleno)]
    ];
    $resultados[] = $plenoAlQuince;
    
    return $resultados;
}

// Función para transformar un array de una quiniela en una tabla HTML
function tabla($quiniela) {
    $html = '<table border="1" cellpadding="5" cellspacing="0">';
    $html .= '<tr><th>#</th><th>Resultado</th></tr>';
    
    // Mostrar los 14 resultados de 1X2
    for ($i = 0; $i < 14; $i++) {
        $html .= '<tr>';
        $html .= '<td>' . ($i + 1) . '</td>';
        $html .= '<td>' . $quiniela[$i] . '</td>';
        $html .= '</tr>';
    }
    
    // Mostrar el pleno al quince
    $html .= '<tr>';
    $html .= '<td>Pleno al 15</td>';
    $html .= '<td>' . $quiniela[14][0] . ' - ' . $quiniela[14][1] . '</td>';
    $html .= '</tr>';
    
    $html .= '</table>';
    
    return $html;
}

// Ejemplo de uso
$quiniela = quiniela();
echo tabla($quiniela);

?>