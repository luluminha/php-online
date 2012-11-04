<?php

header('Content-Type: text/html; charset=utf-8');

//print dá saida de texto, o echo não.
echo 'oláááá mundo';
echo "<br>";
print 'oláááá mundo';
echo "<hr>";

/* operador de concatenação (.), junta duas strings,
 * duas variáveis e etc.
 */
$operador = '??';
$numero = '07';
echo 'olá mundo' . ' ' . $numero . $operador;
echo "<hr>";

/* diferença aspas duplas(") e aspas simples (')
 */
echo 'olá mundo' . ' ' . $numero . $operador;

echo "<br>";

echo 'olá mundo' . " " . $numero . $operador;

echo "<br>";

echo "olá mundo $numero $operador";

echo "<br>";

echo 'olá mundo $numero $operador'; // php nao procura variaiveis com aspas simples.

echo "<br>";

echo 'olá mundo ' . $numero . $operador; // para resolver usamos o operador de concatenação.
echo "<hr>";

/* \n é a quebra de linha no php.
 * obs: só funciona com aspas duplas (")
 */

echo '<br><pre>';
echo "olá mundo \n$numero\n$operador";  //código mais curto porém mais dificil de assimilar
echo "\n" . 'olá mundo' . "\n" . $numero . "\n" . $operador; //igual ao de cima porém mais fácil de ler

echo '</pre><hr>';

/* códigos html usam aspas duplas ("). logo o código php tem que 
 * começar com aspas simples(')
 */

echo '<a href="http://www.globo.com">Globo</a>';
echo "<br>";
echo "<hr>";

// aspas simples dentro de aspas duplas
echo 'E ele falou: "use aspas simples"';
echo "<br>";
echo 'E ele falou: "use \'aspas\' simples"';
echo "<br>";
echo "<a href=\"http://www.globo.com\">Globo</a>"; //código php e html com aspas duplas
    




