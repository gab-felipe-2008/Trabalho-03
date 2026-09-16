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
Descritivo: Escreva um programa que leia um numero real e, se for positivo, exiba seu inverso (1/x); caso contrario, exiba o seu valor absoluto (numero multiplicado por -1).
*******************************************************************************/
    //leitura n° real
    $numRea = (float) readline("Digite um número qualquer: ");

    //Estrutura de condição para exibir o inverso e valor absoluto do n°
    if ($numRea > 0 and $numRea != 0){
        $inverso = 1 / $numRea; //calculo do valor inverso.
        echo "O inverso de ", $numRea, " é ", $inverso;
    }else {
        $vlrAbs = $numRea * -1; //cálculo do valor absoluto
        echo "O valor absoluto de ", $numRea, " é ", $vlrAbs;
    }
?>
