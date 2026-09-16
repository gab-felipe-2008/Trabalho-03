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
Descritivo: Escreva um programa que leia um numero inteiro de 3 casas decimais (100 a 999) e informe se o algarismo da casa das centenas é par ou impar.
*******************************************************************************/

    $num = (int) readline("Digite um numero inteiro de 3 casas decimais (100 a 999): ");

    if ($num < 100 || $num > 999) {
        echo "Numero invalido. Por favor, digite um numero entre 100 e 999.\n";
        exit(1);
    }

    $cen = (int) ($num / 100);

    if ($cen % 2 == 0) {
        echo "O algarismo da casa das centenas ($cen) é par.\n";
    } else {
        echo "O algarismo da casa das centenas ($cen) é impar.\n";
    }

    /* Resumindo: O programa lê um número inteiro de 3 casas decimais (100 a 999) e informa se o algarismo da casa das centenas é par ou ímpar. Utiliza a divisão inteira para obter o algarismo da casa das centenas e o operador módulo para verificar se é par ou ímpar. */

?>