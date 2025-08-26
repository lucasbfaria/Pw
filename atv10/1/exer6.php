<?php
$numeros = $_POST['numeros'];
$valores = explode(",", $numeros);

$soma = 0;
$qtd = 0;

foreach ($valores as $valor) {
    $soma += $valor;
    $qtd++;
}

echo "Média: " . ($soma / $qtd);
?>
