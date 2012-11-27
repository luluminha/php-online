<?php

header('Content-Type: text/html; charset=utf-8');

$idade = 20;

if ($idade >= 18) {
    echo "você é maior de idade";
}
/* == igualdade
 * != desigualdade
 * > maior que
 * >= maior ou igual a
 * < menor que
 * <= menor ou igual a
 */

echo '<br><hr><br>';

$nacionalidade = "brasileira";

if ($idade >= 18 && $nacionalidade == "brasileira") {
    echo 'seja bem vindo!';
}else{
    echo "você não tem acesso a isto";
}

/*
 * && e
 * || ou
 */
   echo '<br><hr><br>';

   $verdade = false;
   if(!$verdade){
       echo "não é verdade";
   }
// ! not (quando não for verdade)
   ?>
