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
Descritivo: Escreva um programa que leia duas variaveis inteiras (A e B) e efetue a troca de conteudo entre elas de forma que A passe a valer B, e B passe a valer A. Exiba os valores antes e depois da troca.
*******************************************************************************/
$n1 = readline("Digite o 1° número INTEIRO: "); //Usuário informa o 1° número.
$n2 = readline("Digite o 2° número INTEIRO: "); //Usuário informa o 2° número.

echo "O valor do primeiro número digitado é ", $n1," e o valor do segundo númerox digitado é ",$n2,"." . PHP_EOL;  // Programa mostra ao usuário os valores de cada número que ele digitou.

//Troca do valor de cada variável (um valor pelo outro). Utilzado array.
[$n1,$n2] = [$n2,$n1];

//Mostra no terminal o valor invertido das variáveis.
echo "Agora, após a inversão dos valores, o primeiro número digitado passou a valer ", $n1 , " e o segundo número digitado passou a valer ", $n2,".";
?>
