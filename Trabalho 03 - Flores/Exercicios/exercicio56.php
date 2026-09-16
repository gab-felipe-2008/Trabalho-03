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
Descritivo: Programa que le um tipo de veiculo(A ... E) e recebe a distancia do veiculo, e depois faz o calculo para saber o combustivel estimado;
*******************************************************************************/

$tipo = readline("Digite o tipo do veiculo('A', 'B', 'C', 'D' ou 'E'): ");

$distancia = (float) readline("Digite a distancia em KM, que o veiculo vai percorrer: ");

$combutivel = 0;
switch ($tipo){
    case 'A':
        $combustivel = $distancia / 13.5;
        echo"O total de litros de combustivel estimado para o trajeto: " . number_format($combustivel, 2) . "";
    break;
    case 'B':
        $combustivel = $distancia / 12.0;
        echo"O total de litros de combustivel estimado para o trajeto: " . number_format($combustivel, 2) . "";
    break;
    case 'C':
        $combustivel = $distancia / 10.5;
        echo"O total de litros de combustivel estimado para o trajeto: " . number_format($combustivel, 2) . "";
    break;
    case 'D':
        $combustivel = $distancia / 9.0;
        echo"O total de litros de combustivel estimado para o trajeto: " . number_format($combustivel, 2) . "";
    break;
    case 'E':
        $combustivel = $distancia / 7.5;
        echo"O total de litros de combustivel estimado para o trajeto: " . number_format($combustivel, 2) . "";
    break;
    default:
        echo"Coloque um valor correto! ";
    break;
}