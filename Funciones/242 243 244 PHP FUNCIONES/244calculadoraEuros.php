<!-- 244calculadoraEuros.php: utiliza 243euros.php
y prueba las funciones pasando tanto cantidades con la cotización por
defecto, como con nuevas cotizaciones. Recuerda que 1 euro son/eran
166.386 pesetas. -->
<?php
include '244euros.php';

// Test with default conversion rate
$cantidadPesetas = 1000;
$cantidadEuros = 10;

echo "Con la cotización por defecto (1 euro = 166.386 pesetas):<br>";
echo "$cantidadPesetas pesetas son " . peseta2euros($cantidadPesetas) . " euros.<br>";
echo "$cantidadEuros euros son " . euros2pesetas($cantidadEuros) . " pesetas.<br>";

// Test with custom conversion rate
$cotizacionCustom = 150;
echo "<br>Con una cotización personalizada (1 euro = $cotizacionCustom pesetas):<br>";
echo "$cantidadPesetas pesetas son " . peseta2euros($cantidadPesetas, $cotizacionCustom) . " euros.<br>";
echo "$cantidadEuros euros son " . euros2pesetas($cantidadEuros, $cotizacionCustom) . " pesetas.<br>";
?>