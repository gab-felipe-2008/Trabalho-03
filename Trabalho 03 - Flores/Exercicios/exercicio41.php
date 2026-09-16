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
Descritivo: Escreva um programa para calcular o imposto de renda anual de um contribuinte. O
programa deve ler: CPF, Nome, Rendimento Anual, Imposto Retido na Fonte, Contribuição
Previdenciária, Despesas Médicas e Número de Dependentes.
Considere as seguintes regras:
- Deduzir R$ 1.080,00 por dependente;
- Total das Deduções = Contribuição Previdenciária + Despesas Médicas + Dedução por
dependentes;
- Base de Cálculo = Rendimento Anual - Total das Deduções;
- Imposto Devido = (Base de Cálculo * Alíquota) - Parcela a Deduzir (conforme tabela abaixo):
 * Base até R$ 10.800,00: Isento (Alíquota 0%)
 * Base de R$ 10.800,01 até R$ 21.600,00: Alíquota 15%, Parcela a deduzir R$ 1.620,00
 * Base acima de R$ 21.600,00: Alíquota 25%, Parcela a deduzir R$ 3.780,00
- Se a diferença (Imposto Devido - Imposto Retido na Fonte) for positiva, há imposto a
PAGAR; se for negativa, há imposto a RESTITUIR.

*******************************************************************************/

    $cpf = readline("Digite o CPF: ");
    $nome = readline("Digite o Nome: ");
    $rendimentoAnual = (float) readline("Digite o Rendimento Anual: ");
    $impostoRetido = (float) readline("Digite o Imposto Retido na Fonte: ");
    $contribuicaoPrevidenciaria = (float) readline("Digite a Contribuição Previdenciária: ");
    $despesasMedicas = (float) readline("Digite as Despesas Médicas: ");
    $numDependentes = (int) readline("Digite o Número de Dependentes: ");

    $deducaoDependentes = $numDependentes * 1080.00;
    $totalDeducoes = $contribuicaoPrevidenciaria + $despesasMedicas + $deducaoDependentes;
    $baseCalculo = $rendimentoAnual - $totalDeducoes;

    if ($baseCalculo <= 10800.00) {
        $impostoDevido = 0;
    } elseif ($baseCalculo <= 21600.00) {
        $impostoDevido = ($baseCalculo * 0.15) - 1620.00;
    } else {
        $impostoDevido = ($baseCalculo * 0.25) - 3780.00;
    }

    $diferenca = $impostoDevido - $impostoRetido;

    if ($diferenca > 0) {
        echo "Imposto a PAGAR: R$ " . number_format($diferenca, 2, ',', '.') . "\n";
    } else {
        echo "Imposto a RESTITUIR: R$ " . number_format(abs($diferenca), 2, ',', '.') . "\n";
    }

?>