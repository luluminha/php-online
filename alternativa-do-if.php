<?php

header('Content-Type: text/html; charset=utf-8');

$idade = 20;
$nacionalidade = "brasileira";

if ($idade >= 18 && $nacionalidade == "brasileira") {
    echo 'seja bem vindo!';
} else {
    echo "você não tem acesso a isto";
}
/*
 * && e
 * || ou
 */

echo '<br><hr><br>';

echo 'ou'; //em vez de {} usa-se :
echo "<br>";
echo "<br>";


if ($idade >= 18 && $nacionalidade == "brasileira"):
    echo 'seja bem vindo!';
else:
    echo "você não tem acesso a isto";
endif;
?>
