<?php
if (!isset($_POST['idade']) || $_POST['idade'] === "") {
    echo "Nenhum dado foi enviado.";
} else if (!is_numeric($_POST['idade'])) {
    echo "O valor informado não é numérico.";
} else {
    $idade = $_POST['idade'];
    echo ($idade >= 18) ? "Maior de idade" : "Menor de idade";
}
?>