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
Descritivo: Digita a altura, digita o sexo: M ou F, e depois calcula de acordo com o sexo
*******************************************************************************/

$altura = (float) readline("Digite a sua altura: ");

$sexo = readline("Digite o seu sexo(M / F): ");

$ideal = 0;

if($sexo == 'M' || $sexo == 'm'){
    $ideal = (72.2 * $altura) - 58;
    echo"Seu peso ideal seria: " . number_format($ideal, 2) ." ";
} else if($sexo == 'F' || $sexo == 'f'){
    $ideal = (62.1 * $altura) - 44.7;
    echo"Seu peso ideal seria: " . number_format($ideal, 2) ." ";
} else{
    echo "Opção de sexo inválida.";
}