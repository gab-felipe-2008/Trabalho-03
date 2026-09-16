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
Descritivo: Ler tres numeros e descobrir qual e maior o do meio e o menor, e depois printar em ordem crescente e decrescente.
*******************************************************************************/

echo"Digite o primeiro número: ";
$a = (float) fgets(STDIN);
echo"Digite o segundo número: ";
$b = (float) fgets(STDIN);
echo"Digite o terceiro número: ";
$c = (float) fgets(STDIN);

$maior = 0;
$meio = 0;
$menor = 0;

if($a <= $b&& $a <= $c){
    $menor = $a;
    if ($b <= $c){
        $meio = $b;
        $maior = $c;
    }
    else{
        $meio = $c;
        $maior = $b;
    }
} else if($b <= $a && $b <= $c){
    $menor = $b;
    if ($a <= $c){
        $meio = $a;
        $maior = $c;
    }
    else{
        $meio = $c;
        $maior = $a;
    }
}
else{
    $menor = $c;
    if ($a <= $b){
        $meio = $a;
        $maior = $b;
    }
    else {
        $meio = $b;
        $maior = $a;
    }
}

echo"Sua ordem crecente é : $menor , $meio , $maior";
echo"\nSua ordem decrecente é : $maior , $meio , $menor";



