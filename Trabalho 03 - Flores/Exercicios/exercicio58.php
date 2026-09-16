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
Descritivo: Escreva um programa que leia uma letra do teclado e informe se ela � uma vogal maiuscula, uma vogal minuscula ou uma consoante.
*******************************************************************************/

$letra = readline("Digite uma letra: ");

if ($letra == 'A' || $letra == 'E' || $letra == 'I' || $letra == 'O' || $letra == 'U') {
    echo "A letra '$letra' e uma VOGAL MAIUSCULA.\n";
} 

else if ($letra == 'a' || $letra == 'e' || $letra == 'i' || $letra == 'o' || $letra == 'u') {
    echo "A letra '$letra' e uma VOGAL MINUSCULA.\n";
} 

else {
    echo "A letra '$letra' e uma CONSOANTE.\n";
}