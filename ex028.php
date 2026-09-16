<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2
Componentes:
 26008173-2 - Alan Cristian dos Santos Costa 
 26007131-2 - Gabriel Felipe Albano Grendel
 26014079-2 - Gustavo Ramos Marcondes
 26005289-2 - Marcio José Aguiar Filho
 26010360-2 - Victor Asaf Antunes dos Santos
Data: 15 de Setembro de 2026
Descritivo: Programa que lê um número real, e caso ele for maior que 20, sera calculado sua metade.
*******************************************************************************/
//Leitura do n° real
$numRea = readline("Digite aqui um número qualquer: ");

//Estrutura de condição para saber se o n° é maior ou menor que 20 e calcular sua metade
if ($numRea > 20){
    $met = $numRea / 2; //Calculo da metade do n° real caso for maior que 20.
    $met = round($met,2); //Deixei o valor da metade apenas com 2 casas decimais se houver vírgula.
    echo "O número que você informou é maior que 20. O valor da sua metade é: ", $met, ".";
}else{
    echo "O número informado é menor que 20, não será possível calcular sua metade";
}
?>