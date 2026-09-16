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
Descritivo: Escreva um programa que leia a sigla do estado onde uma pessoa nasceu e informe se ela é carioca, paulista, mineira ou de outro estado (outros).
*******************************************************************************/

    $sigla = readline("Digite a sigla do estado onde você nasceu: ");

    switch (strtoupper($sigla)) {
        case 'RJ':
            echo "Você é carioca.\n";
            break;
        case 'SP':
            echo "Você é paulista.\n";
            break;
        case 'MG':
            echo "Você é mineira.\n";
            break;
        case 'ES':
            echo "Você é capixaba.\n";
            break;
        case 'BA':
            echo "Você é baiano.\n";
            break;
        case 'PR':
            echo "Você é paranaense.\n";
            break;
        case 'RS':
            echo "Você é gaúcho.\n";
            break;
        case 'SC':
            echo "Você é catarinense.\n";
            break;
        case 'PE':
            echo "Você é pernambucano.\n";
            break;
        case 'CE':
            echo "Você é cearense.\n";
            break;
        case 'AL':
            echo "Você é alagoano.\n";
            break;
        case 'PA':
            echo "Você é paraense.\n";
            break;
        case 'AM':
            echo "Você é amazonense.\n";
            break;
        case 'DF':
            echo "Você é candango / brasiliense.\n";
            break;
        case 'GO':
            echo "Você é goiano.\n";
            break;
        case 'MA':
            echo "Você é maranhense.\n";
            break;
        case 'PB':
            echo "Você é paraibano.\n";
            break;
        case 'PI':
            echo "Você é piauiense.\n";
            break;
        case 'RN':
            echo "Você é potiguar.\n";
            break;
        case 'SE':
            echo "Você é sergipano.\n";
            break;
        case 'TO':
            echo "Você é tocantinense.\n";
            break;
        case 'RO':
            echo "Você é rondoniense.\n";
            break;
        case 'AC':
            echo "Você é acriano.\n";
            break;
        case 'RR':
            echo "Você é roraimense.\n";
            break;
        case 'AP':
            echo "Você é amapaense.\n";
            break;
        case 'MS':
            echo "Você é sul-mato-grossense.\n";
            break;
        case 'MT':
            echo "Você é mato-grossense.\n";
            break;
        default:
            echo "Você é de outro estado.\n";
            break;
    }

    /* Resumindo: O programa lê a sigla do estado onde uma pessoa nasceu e informa se ela é carioca, paulista, mineira ou de outro estado (outros). Utilizando o switch para comparar a sigla e exibir a mensagem correspondente. */
?>