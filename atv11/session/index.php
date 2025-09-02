<?php
    session_start();

    if(isset($_SESSION['nome'])){
        echo '<h2>Seja bem-bindo '. $_SESSION['nome'].' </h2>';
        echo "<a href='logout.php'>Sair</a>";
    }else{
        header("Location: login.php");
        exit;
    }
?>