<?php

header('Content-Type: text/html; charset=utf-8');
echo 'for encremento<br>';
for ($i = 0; $i < 10; $i++) {
    echo 'a variável i é igual a: ' . $i . '<br>';
}
echo '<br><hr><br>';
echo 'for decremento<br>';

for ($i = 10; $i > 0; $i--) {
    echo 'a variável i é igual a: ' . $i . '<br>';
}

/*  for é mais utilizado quando soubermos o numero de repetições
 *O for() é formado por três partes: a declaração onde definimos
 * uma variável, depois temos a condição onde definimos uma 
 * condição que, enquanto verdadeira, a repetição acontecerá e 
 * também o incremento que será executado após cada repetição.
*/

echo '<br><hr><br>';
echo 'while <br>';
$i = 0;
while($i < 10){
    echo 'a variável i é igual a: ' . $i . '<br>';
    $i++;
}

?>
