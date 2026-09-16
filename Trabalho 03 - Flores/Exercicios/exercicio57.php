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
Descritivo: Recebe o dia, mes e ano de uma data e verifica se ela e valida, considerando os dias de cada mes e os anos bissextos.
*******************************************************************************/

$dia = (int) readline("Digite o dia: ");

$mes = (int) readline("Digite o mes: ");

$ano = (int) readline("Digite o ano: ");

$bissexto = false;
if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
    $bissexto = true;
}

$diasNoMes = 0;

if ($mes == 1 || $mes == 3 || $mes == 5|| $mes == 7 || $mes == 8 || $mes == 10 || $mes == 12) {
    $diasNoMes = 31;
} else if ($mes == 4 || $mes == 6 || $mes == 9|| $mes == 11) {
    $diasNoMes = 30;
} else if ($mes == 2) {
    if ($bissexto == true) {
        $diasNoMes = 29;
    } else {
        $diasNoMes = 28;
    }
}

if ($mes >= 1 && $mes <= 12 &&$dia >= 1 && $dia <= $diasNoMes) {
    echo "Data valida.\n";
} else {
    echo "Data invalida.\n";
}