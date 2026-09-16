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
Descritivo: Digitar 3 notas, separar por maior e segunda maior, somar e dividir essas duas maiores e printar.
*******************************************************************************/

echo"Digite a primeira nota: ";
$n1 = (float) fgets(STDIN);

echo"Digite a segunda nota: ";
$n2 = (float) fgets(STDIN);

echo"Digite a terceira nota: ";
$n3 = (float) fgets(STDIN);

$maior = 0;
$maior02 = 0;

if ($n1 >= $n2 && $n1 >= $n3) {
    $maior = $n1;
    if ($n2 >= $n3) {
        $maior02 = $n2;
    } else {
        $maior02 = $n3;
    }
} else if ($n2 >= $n1 && $n2 >= $n3) {
    $maior = $n2;
    if ($n1 >= $n3) {
        $maior02 = $n1;
    } else {
        $maior02 = $n3;
    }
} else {
    $maior = $n3;
    if ($n1 >= $n2) {
        $maior02 = $n1;
    } else {
        $maior02 = $n2;
    }
}

$media = ($maior + $maior02) / 2;

echo"\nSua media e: $media";


