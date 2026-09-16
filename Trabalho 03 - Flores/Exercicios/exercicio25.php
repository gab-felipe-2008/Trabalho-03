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
Descritivo: Escreva um programa que leia uma temperatura dada na escala Fahrenheit e exiba o equivalente convertido em graus Celsius (Formula de conversao: C = 5/9 * (F - 32)).
*******************************************************************************/
$temFah = readline("Digite a temperatura em Fahrenheit: "); //Usuário digita a temperatura em Fahrenheit para converter em graus celsius.
$temCel = 5/9 * ($temFah - 32) ; // Fórmula para conversão em graus Celsius
$temCel = round($temCel,2); // Deixar o resultado da temperatura °C com apenas 2 casas decimais
echo "A temperatura em Fahrenheit convertida para graus Celsius é: ", $temCel,"°C";

//CÓDIGO CONVERTE DE FAHRENHEIT PARA GRAUS CELSIUS.
?>
