<?php
	setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
	date_default_timezone_set('America/Sao_Paulo');
 
    $date = '2025-01-08';
    echo strftime("%A, %d de %B de %Y", strtotime( $date ))."<br>";
    $date = 'today';
    echo strftime("%A, %d de %B de %Y", strtotime( $date ))."<br>";
    $date = '2025-04-08';
    echo strftime("%A, %d de %B de %Y", strtotime( $date ));
?>
	
	
	
	






