<?php
$globalVar = 10;

function exemploVariaveis() {
    $localVar = 5; 
    echo "Dentro da função:\n";
    echo "Variável local: $localVar\n";

   
    global $globalVar;
    echo "Variável global: $globalVar\n";
}

exemploVariaveis();

echo "\nFora da função:\n";
echo "Variável global: $globalVar\n";


?>
