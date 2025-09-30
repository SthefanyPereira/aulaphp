<?php 
function calcularMedia($a, $b, $c){
    return ($a + $b + $c) / 3;
}

$valor = calcularMedia(3, 3, 3);
echo "A média do aluno é: $valor";
?>
