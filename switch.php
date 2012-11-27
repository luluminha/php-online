<?php

header('Content-Type: text/html; charset=utf-8');

$var = '4';

switch ($var) {
    case 1:
    case 'a':
        echo 'Váriável com valor 1';
        break;
    case 2:
    case 'b':
        echo 'Váriável com valor 2';
        break;
    case 3:
    case 'c':
        echo 'Váriável com valor 3';
        break;
    case 4:
    case 'd':
        echo 'Váriável com valor 4';
        break;
    default :
        echo 'Eu não sei o valor da variável';
}
/* usa-se switch quando eu tenho uma variável com valores diferentes
 * e que eu precise executar um código diferente para cada valor.
 * uso if para todos os outros casos
 */
?>
