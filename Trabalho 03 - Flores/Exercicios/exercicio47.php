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
Descritivo: Escreva um programa que leia dois nomes e os exiba na tela em ordem alfabetica.
*******************************************************************************/

    $nome1 = readline("Digite o primeiro nome: ");
    $nome2 = readline("Digite o segundo nome: ");

    if (strcasecmp($nome1, $nome2) < 0) {
        echo "Ordem alfabetica: " . $nome1 . ", " . $nome2 . "\n";
    } else {
        echo "Ordem alfabetica: " . $nome2 . ", " . $nome1 . "\n";
    }

    /* Resumindo: O programa lê dois nomes e os exibe em ordem alfabetica, utilizando a função nativa strcasecmp() para comparar os nomes sem diferenciar maiusculas de minusculas. utiliza o if para determinar a ordem. */
?>