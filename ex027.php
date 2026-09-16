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
Descritivo: Programa que lê um número inteiro e verifica se ele é maior que zero(0).
*******************************************************************************/
$numInt = readline("Informe um número inteiro: ");//Usuário informa um n° inteiro.

//Estrutura de condição para verificar se o n° é ou não maior que zero(0).
if ($numInt > 0){
    echo "Esse número é maior que zero(0).";
}else{
    echo "Esse número não é maior que zero(0).";
}

?>