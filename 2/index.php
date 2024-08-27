<?php
    // Passo 1: Cria um array com dez números inteiros.
    $numeros = array(5, 12, 7, 9, 14, 20, 33, 18, 25, 40);

    // Passo 2: Cria uma função que verifica se um número é par.
    function ePar($numero) {
        return $numero % 2 == 0;
    }

    // Passo 3: Usa um loop for para iterar sobre o array e usar a função de verificação de números pares.
    $pares = array(); // Novo array para armazenar números pares
    for ($i = 0; $i < count($numeros); $i++) {
        if (ePar($numeros[$i])) {
            $pares[] = $numeros[$i];
        }
    }

    // Passo 4: Armazena os números pares em um novo array e os exibe na tela.
    echo "Números pares encontrados: " . implode(", ", $pares);
?>
