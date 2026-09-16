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
Descritivo: Escreva um programa para calcular a conta final de um hospede de um hotel. Devem ser lidos: nome, tipo do apartamento (A, B, C ou D), quantidade de diarias e valor do consumo interno.
O valor unitário da diária é determinado pela tabela:
- Apartamento A: R$ 150.00 | Apartamento B: R$ 100.00
- Apartamento C: R$ 75.00 | Apartamento D: R$ 50.00
O programa deve calcular:
- Valor total das diárias (dias * valor_diaria);
- Subtotal (diárias + consumo interno);
- Taxa de serviço (10% sobre o subtotal);
- Total geral (subtotal + taxa de serviço).
Exiba a fatura completa e detalhada.
*******************************************************************************/

    $nome = readline("Digite o nome do hospede: ");
    $tipoAp = strtoupper(readline("Digite o tipo do apartamento (A, B, C ou D): "));
    $qtdDiarias = (int) readline("Digite a quantidade de diarias: ");
    $vlrConsumo = (float) readline("Digite o valor do consumo interno: ");

    switch ($tipoAp) {
        case 'A':
            $vlrDiaria = 150.00;
            break;
        case 'B':
            $vlrDiaria = 100.00;
            break;
        case 'C':
            $vlrDiaria = 75.00;
            break;
        case 'D':
            $vlrDiaria = 50.00;
            break;
        default:
            echo "Tipo de apartamento inválido.\n";
            exit(1);
    }

    $vlrTotalDiarias = $qtdDiarias * $vlrDiaria;
    $subtotal = $vlrTotalDiarias + $vlrConsumo;
    $taxaServico = $subtotal * 0.10;
    $totalGeral = $subtotal + $taxaServico;

    echo "Fatura do Hóspede Detalhada:\n";
    echo "Nome: $nome\n";
    echo "Tipo de Apartamento: $tipoAp\n";
    echo "Quantidade de Diárias: $qtdDiarias\n";
    echo "Valor do Consumo: R$ " . number_format($vlrConsumo, 2, ',', '.') . "\n";
    echo "Valor Total das Diárias: R$ " . number_format($vlrTotalDiarias, 2, ',', '.') . "\n";
    echo "Subtotal: R$ " . number_format($subtotal, 2, ',', '.') . "\n";
    echo "Taxa de Serviço (10%): R$ " . number_format($taxaServico, 2, ',', '.') . "\n";
    echo "Total Geral: R$ " . number_format($totalGeral, 2, ',', '.') . "\n";

    /* Resumindo: O programa lê o nome do hóspede, o tipo do apartamento, a quantidade de diárias e o valor do consumo interno. Com base nas informações, verifica o tipo de apartamento através de um switch, calcula o valor total das diárias, o subtotal, a taxa de serviço e o total geral. Por fim, exibe a fatura detalhada do hóspede. */
?>