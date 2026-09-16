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
Descritivo: Digitar 5 numeros e descobrir quem é o maior e menor desses 5.
*******************************************************************************/

echo "Digite o primeiro numero: ";
$a = (float) fgets(STDIN);

$maior = $a;
$menor = $a;

echo "Digite o segundo numero: ";
$b = (float) fgets(STDIN);

if($b > $maior) { $maior = $b;}
if($b < $menor) { $menor = $b;}

echo "Digite o terceiro numero: ";
$c = (float) fgets(STDIN);

if($c > $maior) { $maior = $c;}
if($c < $menor) { $menor = $c;}


echo "Digite o quarto numero: ";
$d = (float) fgets(STDIN);

if($d > $maior) { $maior = $d;}
if($d < $menor) { $menor = $d;}

echo "Digite o quinto numero: ";
$e = (float) fgets(STDIN);

if($e > $maior) { $maior = $e;}
if($e < $menor) { $menor = $e;}

echo "\n maior numero: $maior, menor numero: $menor";



