<?php
/*******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Tecnicas de Programacao
Professor: Flores
Turma: ESOFT-2
Componentes:
              260081732 - Alan Cristian dos Santos Costa
              260071312 - Gabriel Felipe Albano Grendel
              260140792 - Gustavo Ramos Marcondes
              260052892 - Marcio Jose Aguiar Filho
              260103602 - Victor Asaf Antunes dos Santos
Data: 19 de Setembro de 2026
Descritivo: Escreva um programa que leia o ano de nascimento de uma pessoa e o ano atual. Verifique se o ano de nascimento é um ano valido e exiba a idade calculada.
*******************************************************************************/

    $anoNascimento = (int) readline("Digite o ano de nascimento: ");
    $anoAtual = (int) readline("Digite o ano atual: ");

    if ($anoNascimento < 1900 || $anoNascimento > $anoAtual) {
        echo "Ano de nascimento invalido. Por favor, digite um ano entre 1900 e $anoAtual.\n";
        exit(1);
    }

    $idade = $anoAtual - $anoNascimento;

    echo "Idade calculada: " . $idade . " anos.\n";

    /* Resumindo: O programa lê o ano de nascimento e o ano atual, verifica se o ano de nascimento é válido (entre 1900 e o ano atual) e calcula a idade subtraindo o ano de nascimento do ano atual. A idade calculada é exibida na tela. */
?>