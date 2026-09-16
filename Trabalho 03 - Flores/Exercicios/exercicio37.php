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
Descritivo: Escreva um programa que leia tres notas de um aluno, calcule a media aritmetica simples e exiba a media e o conceito correspondente, conforme a tabela: Memia >= 8.0 (Conceito A), Media >= 5.0 e < 8.0 (Conceito B), Media < 5.0 (Conceito C).
*******************************************************************************/

    $nota1 = (float) readline("Digite a primeira nota: ");
    $nota2 = (float) readline("Digite a segunda nota: ");
    $nota3 = (float) readline("Digite a terceira nota: ");
    $conceito = "";

    $media = ($nota1 + $nota2 + $nota3) / 3;

    if ($media >= 8.0) {
        $conceito = "A";
    } elseif ($media >= 5.0 && $media < 8.0) {
        $conceito = "B";
    } else {
        $conceito = "C";
    }

    echo "Média: " . $media . "\n";
    echo "Conceito: " . $conceito . "\n";

    /* Resumindo: O programa lê três notas de um aluno, calcula a média aritmética simples e exibe a média e o conceito correspondente de acordo com a tabela especificada. */
?>