<?php

// numeros inteiros
$variavel = 13;
echo is_integer($variavel);
echo "<br>";

// numeros com ponto flutuante
$variavel = 13.20;
echo is_float($variavel);

// strings (texto)
$variavel = "luma";
$variavel = "luma";
echo is_string($variavel);

//boleanos - bool (contem true = 1 e false = 0)
$variavel = true;
$variavel = false;
echo is_bool($variavel);

// array (contem varios tipos de dados)
$variavel = array(1, 2, "luma", false);
echo is_array($variavel);

// objetos (programação orientada a objeto. Só funciona se eu tiver classe orientada a objeto
//$variavel = new Objeto();
// recursos especifico do banco de dados
$variavel = mysql_connect("localhost", "root");
echo is_resource($variavel);

//nulo (nao possui valor)
$variavel = null;
echo is_null($variavel);

