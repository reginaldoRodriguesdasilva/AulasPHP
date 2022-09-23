<?php

$nome = "Reginaldo Rodrigues";

$cpf = "123.456.789-10";

$cpfRecortado = substr($cpf, 0, 11);

echo $nome [10];

echo "<hr>";

echo $cpf;

echo "<hr>";

echo $cpfRecortado;

echo "<hr>";

echo str_replace(".", "",$cpfRecortado);

echo "<hr>";

echo str_replace(".", "", substr($cpf, 0, 11));

echo "<hr>";

$data = "20/05/2012";
$dataArray = explode("/", $data);
var_dump($dataArray);

