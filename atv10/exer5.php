<?php
$nome = $_POST['nome'];
$nascimento = new DateTime($_POST['nascimento']);
$hoje = new DateTime();

$idade = $hoje->diff($nascimento)->y;

echo "$nome tem $idade anos";
?>