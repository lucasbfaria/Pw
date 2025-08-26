<?php
$peso = $_POST['peso'];
$altura = $_POST['altura'];

$imc = $peso / ($altura * $altura);

if ($imc < 16) {
    $classificação = "Magreza grave";
} else if ($imc < 17) {
    $classificação = "Magreza moderada";
} else if ($imc < 18.5) {
    $classificação = "Magreza leve";
} else if ($imc < 25) {
    $classificação = "Saudável";
} else if ($imc < 30) {
    $classificação = "Obeso";
} else if ($imc < 35) {
    $classificação = "Obesidade Grau I";
} else if ($imc < 40) {
    $classificação = "Obesidade Grau II (severa)";
} else {
    $classificação = "Obesidade Grau III (mórbida)";
}

echo "IMC: " . number_format($imc, 2) . " - Classificação: $classificação";
?>