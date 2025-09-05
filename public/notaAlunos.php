<?php
$media = 0;
$alunos = [
    "João" => 8.0,
    "Maria" => 6.0,
    "Ana" => 9.0,
];

    foreach ($alunos as $nome => $nota)
        if ($nota >= 7){
            echo "O aluno $nome tirou nota $nota - Situação: <span style='color:blue'>APROVADO</span><br>";
        } else {
            echo "O aluno $nome tirou nota $nota - Situação: <span style='color:red'>REPROVADO</span><br>";
            $media = round(array_sum($alunos) / count($alunos), 2);


        }
        echo "<br> Média da turma = $media";
        ?>
