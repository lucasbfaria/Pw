<?php
    function campoInformado($campo) {
        return isset($_POST[$campo]);
    }

    function campoNaoVazio($campo) {
        return !empty(trim($_POST[$campo]));
    }

    function somenteNumeros($campo) {
        return is_numeric($_POST[$campo]);
    }

    function emailValido($campo) {
        return filter_var($_POST[$campo], FILTER_VALIDATE_EMAIL) !== false;
    }

    function tamanhoMaximo($campo, $max) {
        return strlen($_POST[$campo]) <= $max;
    }
?>