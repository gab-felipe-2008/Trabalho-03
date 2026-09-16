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
Descritivo: Escreva um programa que leia um numero real e informe se ele é positivo, negativo ou nulo.
*******************************************************************************/
  //Leitura do n° real
    $numRea = readline("Digite um número qualquer: ");

    //Estrutura de condição para saber se o número é positivo, negativo ou nulo.
    if ($numRea > 0){ // número positivo
        echo "O número ", $numRea, " é positivo.";
    }else if ($numRea < 0){ //número negativo
        echo "O número ", $numRea, " é negativo.";
    }else if ($num == 0){ //número nulo
        echo "O número ", $numRea, " é nulo.";
    }
?>

