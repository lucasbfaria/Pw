<?php
    // 1. strtoupper() → Converte para MAIÚSCULAS
    $str = "Retorna a string maiúscula.";
    $str = strtoupper($str);
    echo $str . "<br>";

    // 2. strtolower() → Converte para minúsculas
    $str = "RETORNA A STRING MINÚSCULA";
    echo strtolower($str) . "<br>"; 

    // 3. strlen() → Conta o número de caracteres
    $str = "Conta o número de caracteres";
    echo strlen($str). "<br>"; 


    // 4. substr() → Retorna parte da string
    $str = "Retorna parte da string";
    echo substr($str, 0, 10). "<br>"; 


    // 5. str_replace() → Substitui um texto dentro da string
    $str = "Substitui um texto dentro da string";
    echo str_replace("texto", "ola", $str). "<br>"; 


    // 6. strpos() → Retorna a posição da primeira ocorrência
    $str = "Retorna a posição da primeira ocorrência";
    echo strpos($str, "primeira"). "<br>"; 


    // 7. trim() → Remove espaços em branco do início e do fim
    $str = "  Remove espaços em branco do início e do fim  ";
    echo trim($str). "<br>"; 


    // 8. ucfirst() → Coloca a primeira letra da string em maiúscula
    $str = "coloca a primeira letra da string em maiúscula";
    echo ucfirst($str). "<br>"; 


    // 9. ucwords() → Coloca a primeira letra de cada palavra em maiúscula
    $str = "Coloca a primeira letra de cada palavra em maiúscula";
    echo ucwords($str). "<br>"; 

    // 10. strrev() → Inverte a string
    $str = "Inverte a string";
    echo strrev($str); 


?>