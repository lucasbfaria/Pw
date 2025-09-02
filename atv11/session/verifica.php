<?php
    session_start();

    $usuarioC = 'admin';
    $senhaC = 'admin';

    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if ($usuario === $usuarioC && $senha === $senhaC) {
        $_SESSION['nome'] = $usuario;
        header("Location: index.php");
        exit;
    } else {
        echo "Usuário ou senha incorretos. <a href='login.php'>Tentar novamente</a>";
    }
?>