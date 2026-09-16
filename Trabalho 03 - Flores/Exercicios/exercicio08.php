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
Descritivo: Escreva um programa que leia um numero inteiro e exiba na tela o seu antecessor e o seu sucessor.
*******************************************************************************/
$numero = (int) readline("Digite um número inteiro: ");

$antecessor = $numero - 1;
$sucessor = $numero + 1;

echo "Antecessor = $antecessor\n";
echo "Sucessor = $sucessor";

?>
