<?php

header('Content-Type: text/html; charset=utf-8');

$acesso = 0;
echo 'usuario ';
echo ($acesso > 0) ? 'registrado' : 'não registrado';

/* é uma condição
 * retorna uma coisa ou outra. só retorna um valor.
 * 
 */

 echo '<br><hr><br>';

if ($acesso > 0) {
    echo 'usuário registrado';
} else {
    echo 'usuário não registrado';
}
?>
