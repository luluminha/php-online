<?php

header('Content-Type: text/html; charset=utf-8');

$var1 = 10;
$var2 = 20;
$var3 = 30;

// adição
echo $var1 + $var2;
echo "<br>";

//subtração
echo $var1 - $var2;
echo "<br>";

//multiplicação
echo $var1 * $var2;
echo "<br>";

//divisão
echo $var1 / $var2;
echo "<br>";
echo "<hr>";

/* módulo (quanto eu tiro da variável para dar uma divisão exata)
 * utilizado em loopings - quer saber de quanto tempo executamos algo.
 * *resto da divisão*
 */

echo $var1 % 3;
echo "<br>";
echo $var2 % 3;
echo "<br>";
echo $var3 % 3;
echo "<br>";
echo "<hr>";

/* em operações compostas as multiplicações e divisões são realizadas primeiro
 * 
 */

echo $var1 + $var2 * $var3;
echo "<br>";
echo ($var1 + $var2) * $var3;
echo "<br>";
echo "<hr>";

//incremento e decremento

echo $var1 = $var1 + 5;
echo "<br>";
$var1++;$var1--;
echo $var1; 
echo "<br>";
echo "<hr>";

//ou assim (simplificada)

$var2 = $var2 + 10;
$var2 += 10;
echo $var2;

echo "<br>";

$var3 .= " 20"; // é igual a: $var3 = $var3 . "20";
echo $var3;

