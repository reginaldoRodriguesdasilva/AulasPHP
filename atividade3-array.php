<?php

$funcionario =[
       [ 
        "nome" => "José Carlos", 
        "cpf" => "222.222.333-77",
        "data_nasc" => "20/05/1972",
        "cidade" => "Marília",
],
[ 
        "nome" => "Roseane da Silva", 
        "cpf" => "225.365.258-88",
        "data_nasc" => "25/15/1983",
        "cidade" => "Oriente",
],
[ 
        "nome" => "Marcos dos Santos", 
        "cpf" => "258.369.147-75",
         "data_nasc" => "09/07/1963",
        "cidade" => "Marília",
]
        
];

var_dump($funcionario);

echo "nome: ".$funcionario[0]["nome"];
echo "<br>";
echo "cpf: ". $funcionario[0]["cpf"];
echo "<br>";
echo "data_nasc: ". $funcionario[0]["data_nasc"];
echo "<br>";
echo "cidade: ". $funcionario[0]["cidade"];

echo  "<hr>";

echo "nome: ".$funcionario[1]["nome"];
echo "<br>";
echo "cpf: ". $funcionario[1]["cpf"];
echo "<br>";
echo "data_nasc: ". $funcionario[1]["data_nasc"];
echo "<br>";
echo "cidade: ". $funcionario[1]["cidade"];

echo  "<hr>";

echo "nome: ".$funcionario[2]["nome"];
echo "<br>";
echo "cpf: ". $funcionario[2]["cpf"];
echo "<br>";
echo "data_nasc: ". $funcionario[2]["data_nasc"];
echo "<br>";
echo "cidade: ". $funcionario[2]["cidade"];

