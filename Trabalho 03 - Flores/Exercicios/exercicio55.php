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
Descritivo: Le um digito de 1 ... 12 e de acordo com o numero printa o mes desse numero.
*******************************************************************************/

$mes = (int) readline("Digite um numero para mes: ");
$mensagem = "";

switch ($mes) {
    case 1:
        $mensagem = "Janeiro";
        break;
    case 2:
        $mensagem = "Fevereiro";

        break;
    case 3:
        $mensagem = "Março";

        break;
    case 4:
        $mensagem = "Abril";

        break;
    case 5:
        $mensagem = "Maio";

        break;
    case 6:
        $mensagem = "Junho";

        
        break;
    case 7:
        $mensagem = "Julho";

        break;
    case 8:
        $mensagem = "Agosto";

        break;
    case 9:
        $mensagem = "Setembro";

        break;
    case 10:
        $mensagem = "Outubro";

        break;
    case 11:
        $mensagem = "Novembro";

        break;
    case 12:
        $mensagem = "Dezembro";

        break;
    default:
        echo "Mes inválido $mensagem";
        break;
}
echo "Esse mes é: $mensagem";
