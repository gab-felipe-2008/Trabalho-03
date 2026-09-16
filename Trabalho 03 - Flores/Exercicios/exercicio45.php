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
Descritivo: Escreva um programa que implemente uma calculadora basica (+, -, * e /) obtendo dois numeros reais e o operador do teclado.
*******************************************************************************/

    $num1 = (float) readline("Digite o primeiro numero: ");
    $num2 = (float) readline("Digite o segundo numero: ");
    $operador = readline("Digite o operador (+, -, * ou /): ");
    
    switch ($operador) {
        case '+':
            $res = $num1 + $num2;
            break;
        case '-':
            $res = $num1 - $num2;
            break;
        case '*':
            $res = $num1 * $num2;
            break;
        case '/':
            if ($num2 == 0) {
                echo "Erro: Divisao por zero nao e permitida.\n";
                exit(1);
            }
            $res = $num1 / $num2;
            break;
        default:
            echo "Operador invalido. Por favor, digite +, -, * ou /.\n";
            exit(1);
    }

    echo "Resultado: " . $res . "\n";

    /* Resumindo: O programa lê dois números reais e um operador do teclado, realiza a operação correspondente e exibe o resultado. Caso o operador seja inválido ou haja tentativa de divisão por zero, uma mensagem de erro é exibida. É utilizado switch para verificar qual o operador foi escolhido para realizar a operação.*/

?>