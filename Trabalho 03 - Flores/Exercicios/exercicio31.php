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
Descritivo: Escreva um programa que leia um numero inteiro e exiba se ele é PAR ou IMPAR.
*******************************************************************************/
    //Leitura do n° inteiro
    $numInt = readline ("Escreva um número inteiro: ");

    //Estrutura de condição para ver se tal n° é par ou ímpar
    if ($numInt % 2 === 0){ 
        /* Se o resto da divisão desse número por 2 for 0 então ele é par */
        echo "O número ",$numInt, " é par.";    
    }else{
        echo "O número ",$numInt, " é impar.";
    }

?>
