<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2
Componentes:
 26008173-2 - Alan Cristian dos Santos Costa 
 26007131-2 - Gabriel Felipe Albano Grendel
 26014079-2 - Gustavo Ramos Marcondes
 26005289-2 - Marcio José Aguiar Filho
 26010360-2 - Victor Asaf Antunes dos Santos
Data: 15 de Setembro de 2026
Descritivo: Programa que lê duas variáveis inteiras (A e B) e troca o contéudo de cada, da forma que A passa a valer B e B passa a valer A.
*******************************************************************************/

$n1 = readline("Digite o 1° número INTEIRO: "); //Usuário informa o 1° número.
$n2 = readline("Digite o 2° número INTEIRO: "); //Usuário informa o 2° número.

echo "O valor do primeiro número digitado é ", $n1," e o valor do segundo númerox digitado é ",$n2,"." . PHP_EOL;  // Programa mostra ao usuário os valores de cada número que ele digitou.

//Troca do valor de cada variável (um valor pelo outro). Utilzado array.
[$n1,$n2] = [$n2,$n1];

//Mostra no terminal o valor invertido das variáveis.
echo "Agora, após a inversão dos valores, o primeiro número digitado passou a valer ", $n1 , " e o segundo número digitado passou a valer ", $n2,".";
?>