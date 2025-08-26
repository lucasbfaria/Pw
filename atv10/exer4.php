<?php 
$numx = (int) $_POST['numx'];
$numy = (int) $_POST['numy'];

if ($numx <= $numy) {
    for ($i = $numx; $i <= $numy; $i++) {
        echo $i . " ";
    }
} else {
    for ($i = $numy; $i <= $numx; $i++) {
        echo $i . " ";
    }
}
?>