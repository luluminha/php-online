<?php

$nome = "luma seriz";

$teste = <<<QQC
exemplo de variável definida pela sintaxe heredoc<br />
É possivel expandir variáveis: $nome;
QQC;
// evitar usar pois causa erros por causa da formatação (espaços e espaça,emtops


echo $teste;



