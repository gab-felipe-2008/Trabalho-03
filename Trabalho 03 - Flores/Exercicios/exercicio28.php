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
Descritivo: Escreva um programa que leia um numero real e, se ele for maior do que 20, exiba a metade deste numero.
*******************************************************************************/
//Leitura do n° real
$numRea = (float) readline("Digite aqui um número qualquer: ");

//Estrutura de condição para saber se o n° é maior ou menor que 20 e calcular sua metade
if ($numRea > 20){
    $met = $numRea / 2; //Calculo da metade do n° real caso for maior que 20.
    $met = round($met,2); //Deixei o valor da metade apenas com 2 casas decimais se houver vírgula.
    echo "O número que você informou é maior que 20. O valor da sua metade é: ", $met, ".";
}else{
    echo "O número informado é menor que 20, não será possível calcular sua metade.";
}

//PROGROMA LÊ UM NUMERO REAL E CASO ELE FOR MAIOR QUE 20, VAI SER EXIBIDO A METADE DO N° INFORMADO.
?>
