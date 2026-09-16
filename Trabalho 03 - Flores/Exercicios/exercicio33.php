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
Descritivo: Escreva um programa que leia dois numeros reais e exiba o maior deles.
*******************************************************************************/
    //Leitura dos 2 números 
    $n1 = (float) readline("Digite um número: ");
    $n2 = (float) readline("Digite outro número: ");

    //estrutura de condição para exibir o maior número.
    if ($n1 > $n2){
        echo "O maior número que você digitou foi o ", $n1, ".";
    }else if($n2 > $n1){
        echo "O maior número que você digitou foi o ", $n2, ".";
    }
  //PROGRAMA LÊ 2 NUMEROS REAIS E EXIBE O MAIOR DELES.
?>

