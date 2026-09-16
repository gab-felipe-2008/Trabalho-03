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
Descritivo: Uma empresa deseja aplicar um reajuste salarial aos seus funcionarios. Escreva um programa que leia o nome do funcionario e seu salario atual e calcule o novo salario: Ate R$ 1000.00 (20% de reajuste), De R$ 1000.01 ate R$ 5000.00 (10% de reajuste), Acima de R$ 5000.00 (0%).
*******************************************************************************/

    $nome = readline("Digite o nome do funcionario: ");
    $salario = (float) readline("Digite o salario atual: ");
    $novoSalario = 0.0;

    if ($salario <= 1000.00) {
        $novoSalario = $salario * 1.20;
    } elseif ($salario <= 5000.00) {
        $novoSalario = $salario * 1.10;
    } else {
        $novoSalario = $salario;
    }

    echo "Funcionario: " . $nome . "\n";
    echo "Salario atual: R$ " . number_format($salario, 2, ',', '.') . "\n";
    echo "Novo salario: R$ " . number_format($novoSalario, 2, ',', '.') . "\n";

    /* Resumindo: O programa lê o nome do funcionário e seu salário atual, calcula o novo salário com base nas faixas de reajuste especificadas e exibe o nome do funcionário, o salário atual e o novo salário formatado. */
?>