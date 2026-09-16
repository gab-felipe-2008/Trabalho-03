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
Descritivo: Digitar o valor em real, converter para dolar, com a taxa de cotacao.
*******************************************************************************/

echo"Digite o valor em Reais(BRL): ";
$real = (float) fgets(STDIN);

echo"Digite a taxa de cotacao atual do dolar: ";
$cotacao = (float) fgets(STDIN);

$dolar = $real / $cotacao;

echo"\nValor em Reais: BRL " . number_format($real, 2, '.', '') . "\n";
echo"\nValor convertido: USD ". number_format($dolar, 2, '.', '') . "\n";
