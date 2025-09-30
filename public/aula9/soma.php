<?php
function soma($a, $b) {
    echo $a + $b;
}

soma(4, 4);

function soma2($a, $b) {
    return $a + $b;
}

$resultado = soma2 ( 4, 4 );
echo "<br>Resultado: $resultado";

?>


