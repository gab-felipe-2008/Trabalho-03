<?php
/*******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Tecnicas de Programacao
Professor: Flores
Turma: ESOFT-2
Componentes:
              260140792 - Gustavo Ramos Marcondes
              260052892 - Marcio Jose Aguiar Filho
              260071312 - Gabriel Felipe Albano Grendel
              260081732 - Alan Cristian dos Santos Costa
              260103602 - Victor Asaf Antunes dos Santos
Data: 19 de Setembro de 2026
Descritivo: Escreva um programa que leia dois numeros reais e exiba o maior de forma clara (abordagem focada em logica estruturada de decisao composta).
*******************************************************************************/
    //LEITURA DE 2 NÚMEROS REAIS
    $n1 = readline("Digite um número: ");
    $n2 = readline("Digite outro número: ");

    //Estrutura de decisão composta
    if ($n1 > $n2){ // Mostra que o maior número digitado foi o 1°.
        echo "O maior número que você digitou foi o ", $n1, ".",PHP_EOL, "O outro número digitado foi ", $n2,".";
    }else{ // Mostra que o maior número digitado foi o 2°.
        echo "O maior número que você digitou foi o ", $n2, ".",PHP_EOL, "O outro número digitado foi ", $n1,".";
    }
?>
