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
Descritivo: Escreva um programa que determine o grau de obesidade de uma pessoa a partir de seu peso (kg) e altura (m), calculando o IMC (Massa = Peso / Altura2) e classificando de acordo com a tabela: IMC < 26 (Normal), IMC >= 26 e < 30 (Obeso), IMC >= 30 (Obeso Morbido).
*******************************************************************************/

    $peso = (float) readline("Digite o peso (kg): ");
    $altura = (float) readline("Digite a altura (m): ");

    $imc = $peso / ($altura * $altura);

    if ($imc < 26) {
        echo "Classificação: Normal\n";
    } elseif ($imc >= 26 && $imc < 30) {
        echo "Classificação: Obeso\n";
    } else {
        echo "Classificação: Obeso Morbido\n";
    }

    /* Resumindo: O programa lê o peso e a altura de uma pessoa, calcula o IMC e classifica a condição de obesidade de acordo com a tabela especificada. */
?>