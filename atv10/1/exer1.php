<?php
$nome = $_POST['nome'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

$media = ($nota1 + $nota2 + $nota3) / 3;
$situacao = ($media >= 6) ? "Aprovado" : "Reprovado";

echo "Aluno: $nome<br>" . "Média: " . number_format($media, 2, ",", ".") . "<br>Situação: $situacao";