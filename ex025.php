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
Descritivo: Programa que lê uma temperatura na escala Fahrenheit e mostra o
equivalente convertido em graus Celsius. Utilza readline para o usuário digitar a temperatura em fahrenheit e com o valor obtido fazemos a fórmula de conversão e mostramos na tela utilizando echo.
*******************************************************************************/
$temFah = readline("Digite a temperatura em Fahrenheit: "); //Usuário digita a temperatura em Fahrenheit para converter em graus celsius.
$temCel = 5/9 * ($temFah - 32) ; // Fórmula para conversão em graus Celsius
$temCel = round($temCel,2); // Deixar o resultado da temperatura °C com apenas 2 casas decimais
echo "A temperatura em Fahrenheit convertida para graus Celsius é: ", $temCel,"°C";

?>