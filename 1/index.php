<?php
    // Passo 1: Cria um array com as notas de cinco alunos.
    $alunos = array("samuel" => 10, "Henrique" => 8, "Bruno" => 7, "Artur" => 9, "Pedro" => 6);

    // Passo 2: Usa um loop foreach para calcular a soma das notas.
    $somaNotas = 0;
    foreach ($alunos as $nome => $nota) {
        $somaNotas += $nota;
    }

    // Passo 3: Cria uma função que recebe a soma das notas e o número de alunos, e retorna a média.
    function calcularMedia($soma, $numAlunos) {
        return $soma / $numAlunos;
    }

    // Passo 4: Exibe a média das notas na tela.
    $numeroDeAlunos = count($alunos);
    $mediaNotas = calcularMedia($somaNotas, $numeroDeAlunos);
    echo "A média das notas é: " . number_format($mediaNotas, 2);
?>
