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
Descritivo: Escreva um programa que leia tres numeros reais e exiba o maior deles.
*******************************************************************************/

    $num1 = (float) readline("Digite o primeiro numero real: ");
    $num2 = (float) readline("Digite o segundo numero real: ");
    $num3 = (float) readline("Digite o terceiro numero real: ");

    $maior = max($num1, $num2, $num3);

    echo "O maior numero é: " . $maior . "\n";

    /* Resumindo: O programa lê três números reais e exibe o maior deles, o maior número é armazenado na variável $maior pela função nativa max(). */
?>