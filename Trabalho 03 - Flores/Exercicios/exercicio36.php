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
Descritivo: Deseja-se calcular a conta de consumo de energia eletrica de um consumidor. Escreva um programa que leia o codigo do consumidor, o preco do kWh e a quantidade de kWh consumida. Exiba o codigo do consumidor e o total a pagar, sabendo que a taxa minima cobrada é de R$ 11,20.
*******************************************************************************/
    //LER CÓDIGO DO CONSUMIDOR
    $codCon = (int) readline("Digite seu código de consumidor: ");
    //LER PREÇO DO kWh
    $preKwh = (float) readline("Digite o preço do kWh: ");
    $preKwh =round($preKwh,2);//Deixa a variável $preKwh com 2 casas decimais
    //LER QUANTIDADE DE KWH CONSUMIDA
    $qtdCon = readline("Digite a quantidade de kWh consumida: ");
    //CÁLCULO DE QUANTO O CONSUMIDOR VAI TER QUE PAGAR
    $pagar = ($preKwh * $qtdCon);
    $pagar = round($pagar,2);//Deixa o valor com 2 casas decimais.

    //MOSTRAR O CÓDIGO DO CONSUMIDOR
    echo "O código do consumidor é: ",$codCon,".";

    // estrutura caso a tarifa a ser paga for menor que 11.20
    if($pagar < 11.20){
        echo "O valor total a ser pago é de: R$11,20 (TAXA MINÍMA)";
    }else{ //MOSTRA A QUANTIA A SER PAGA SE O VALOR SUPERAR A TARIFA MÍNIMA
        echo "O valor total a ser pago é de: R$",$pagar;
    }

/*PROGRAMA LÊ O CPODIGO DO CONSUMIDOR, PREÇO DO KWH E A QUANTIDADE DE ENERGIA CONSUMIDA. APÓS AS INFORMAÇÕES RECEBIDAS ELE VAI EXIBIR O CÓDIGO DE CONSUMIDOR E O TOTAL 
A PAGAR. PROGRAMA VAI TAMBÉM IDENTIFICAR SE O CONSUMIDOR NÃO UTRAPASSOU A TARIFA MÍNIMA, CASO NÃO TENHA ULTRAPASSADO O PROGRAMA VAI COBRAR SOMENTE 11,,20.*/
?>
