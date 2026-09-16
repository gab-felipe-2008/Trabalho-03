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
Descritivo: Escreva um programa que leia dois numeros reais e os exiba primeiro em ordem crescente e depois em ordem decrescente.
*******************************************************************************/
    //Lê 2 números reais
    $n1 = (float) readline("Digite um número: ");
    $n2 = (float) readline("Digite outro número: ");

    //Exibir os números em ordem crescente e decrescente.
    //Utilizado a estrutura de condição encadeada.
    //Utilizei o PHP_EOL para dar quebra de linha.
    if ($n1 > $n2){ //CONDIÇÃO QUANDO N1 FOR MAIOR QUE N2
        echo "Você digitou os números: ", $n1, " e ", $n2, ".",PHP_EOL; 
        echo "ORDEM CRESCENTE: ", $n2, " -> ", $n1, ".",PHP_EOL;
        echo "ORDEM DECRESCENTE: ", $n1, " -> ", $n2, ".",PHP_EOL;
    }else if ($n2 > $n1){ //CONDIÇÃO QUANDO N2 FOR MAIOR QUE N1
        echo "Você digitou os números: ", $n1, " e ", $n2, ".",PHP_EOL; 
        echo "ORDEM CRESCENTE: ", $n1, " -> ", $n2, ".",PHP_EOL;
        echo "ORDEM DECRESCENTE: ", $n2, " -> ", $n1, ".",PHP_EOL;
    }else if($n1 = $n2){ //CONDIÇÃO QUANDO N1 FOR IGUAL A N2 E VICE-VERSA.
        echo "Você digitou dois números iguais, sendo ele: ", $n1;
    }
//PROGRAMA LÊ 2 NUMEROS REAIS E EXIBE ELES EM ORDEM CRESCENTE E DECRESCENTE.
?>
