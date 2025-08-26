<?php
    include "funcoes.php";

    $erros = [];

    if (!campoInformado("nome") || !campoNaoVazio("nome")) {
        $erros[] = "O campo Nome é obrigatório.";
    } elseif (!tamanhoMaximo("nome", 50)) {
        $erros[] = "O campo Nome deve ter no máximo 50 caracteres.";
    }

    if (!campoInformado("email") || !campoNaoVazio("email")) {
        $erros[] = "O campo Email é obrigatório.";
    } elseif (!emailValido("email")) {
        $erros[] = "Digite um email válido.";
    }

    if (!campoInformado("data_nasc") || !campoNaoVazio("data_nasc")) {
        $erros[] = "O campo Data de Nascimento é obrigatório.";
    } else {
        $data = $_POST["data_nasc"];
        if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $data)) {
            $erros[] = "Data de Nascimento inválida.";
        }
    }

    if (!campoInformado("senha") || !campoNaoVazio("senha")) {
        $erros[] = "O campo Senha é obrigatório.";
    } elseif ($_POST["senha"] !== $_POST["confirma_senha"]) {
        $erros[] = "As senhas não conferem.";
    } elseif (strlen($_POST["senha"]) < 6) {
        $erros[] = "A senha deve ter pelo menos 6 caracteres.";
    }

    if (!campoInformado("telefone") || !campoNaoVazio("telefone")) {
        $erros[] = "O campo Telefone é obrigatório.";
    } elseif (!preg_match('/^[0-9]{11}$/', $_POST["telefone"])) {
        $erros[] = "O telefone deve ter 11 dígitos.";
    }

    if (!campoInformado("login") || !campoNaoVazio("login")) {
        $erros[] = "O campo Login é obrigatório.";
    } elseif (!tamanhoMaximo("login", 20)) {
        $erros[] = "O login deve ter no máximo 20 caracteres.";
    }

    if (!campoInformado("cep") || !campoNaoVazio("cep")) {
        $erros[] = "O campo CEP é obrigatório.";
    } elseif (!preg_match('/^[0-9]{8}$/', $_POST["cep"])) {
        $erros[] = "O CEP deve ter 8 dígitos";
    }

    if (!campoInformado("endereco") || !campoNaoVazio("endereco")) {
        $erros[] = "O campo Endereço é obrigatório.";
    } elseif (!tamanhoMaximo("endereco", 100)) {
        $erros[] = "O endereço deve ter no máximo 100 caracteres.";
    }

    if (!campoInformado("cpf") || !campoNaoVazio("cpf")) {
        $erros[] = "O campo CPF é obrigatório.";
    } elseif (!somenteNumeros("cpf")) {
        $erros[] = "O CPF deve conter apenas números.";
    } elseif (!tamanhoMaximo("cpf", 11)) {
        $erros[] = "O CPF deve ter no máximo 11 dígitos.";
    }

    if (count($erros) > 0) {
        echo "<h3>Erros encontrados:</h3><ul>";
        foreach ($erros as $erro) {
            echo "<li>$erro</li>";
        }
        echo "</ul>";
    } else {
        echo "<h3>Dados validados com sucesso!</h3>";
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    }
?>
