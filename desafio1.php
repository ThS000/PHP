<?php
/*Crie um programa em PHP que:

Armazene o nome de um aluno em uma variável.
Armazene a nota do aluno em outra variável.
Exiba o nome e a nota.
Verifique:
Se a nota for maior ou igual a 7, mostre "Aprovado".
Caso contrário, mostre "Reprovado". */

$nome = "Lucas";
$nota = 8;

if($nota>= 7){
    echo $nome ." sua nota foi : " . $nota . " e você Aprovou";
}else{
    echo $nome . "\n sua nota foi : " . $nota . " e você REPROVOU";
}


?>