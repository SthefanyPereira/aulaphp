<?php
function calcularMedia($n1, $n2, $n3) {
    return ($n1 + $n2 + $n3) / 3;
}

function verificarSituacao($media) {
    if ($media >= 7) {
        return "Aprovado";
    } else {
        return "Reprovado";
    }
}

$alunos = [
    "Ana" => [8.5, 7.0, 9.0],
    "Bruno" => [5.5, 6.0, 6.5]
];

foreach ($alunos as $nome => $notas) {
    $media = calcularMedia($notas[0], $notas[1], $notas[2]);
    $situacao = verificarSituacao($media);
    
    echo "Aluno: $nome\n";
    echo "Média: $media\n"; 
    echo "Situação: $situacao\n\n";
}
?>
