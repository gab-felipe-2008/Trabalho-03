<?php
/*******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Tecnicas de Programacao
Professor: Flores
Turma: ESOFT-2
Componentes:
              260081732 - Alan Cristian dos Santos Costa
              260071312 - Gabriel Felipe Albano Grendel
              260140792 - Gustavo Ramos Marcondes
              260052892 - Marcio Jose Aguiar Filho
              260103602 - Victor Asaf Antunes dos Santos
Data: 19 de Setembro de 2026
Descritivo: Escreva um programa que leia um numero inteiro e informe se ele é divisivel por 3 e por 7 simultaneamente.
*******************************************************************************/

    $n = (int) readline("Digite um numero inteiro: ");

    if ($n % 3 == 0 && $n % 7 == 0) {
        echo "O numero $n é divisivel por 3 e por 7 simultaneamente.\n";
    } else {
        echo "O numero $n nao é divisivel por 3 e por 7 simultaneamente.\n";
    }

    /* Resumindo: O programa lê um número inteiro e verifica se ele é divisível por 3 e por 7 simultaneamente, utilizando o operador módulo em um if para verificar a divisibilidade. */

?>