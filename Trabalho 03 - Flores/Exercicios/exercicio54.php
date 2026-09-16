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
Descritivo: Digita um numero e de acordo com esse numero se for de 1 .. 7, printa o dia da semana de acordo com o numero.
*******************************************************************************/


$dia = (float) readline("Digite um numero para o dia da semana: ");
$mensagem = "";

switch ($dia) {
    case 1:
        $mensagem = "Domingo, fim de semana";
        break;
    case 2:
        $mensagem = "Segunda-feira, dia util";

        break;
    case 3:
        $mensagem = "Terça-feira, dia util";

        break;
    case 4:
        $mensagem = "Quarta-feira, dia util";

        break;
    case 5:
        $mensagem = "Quinta-feira, dia util";

        break;
    case 6:
        $mensagem = "Sexta-feira, dia util";

        
        break;
    case 7:
        $mensagem = "Sabado, fim de semana";

        break;
    default:
        echo "Dia inválido $mensagem";
        break;
}
echo "Esse dia é: $mensagem";
