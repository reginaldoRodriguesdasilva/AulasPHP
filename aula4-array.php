<?php
#array Unidimencional
$listaCompra = ['Arroz','Feijão','Banana','Detergente','Sabonete'];
$listaCompra[] = "Raça Pet";

echo "<pre>";
print_r($listaCompra);
echo "</pre>";

echo "<hr>";

var_dump($listaCompra);

echo "<hr>";

echo $listaCompra[4].", ".$listaCompra[2];

echo "<hr>";

foreach ($listaCompra as $item){

echo $item.", ";
echo "<br>";
}

echo "<hr>";

#array Associativo

$funcionario = [

    "nome" => "Reginaldo Rodrigues", 
    "cargo" => "MEP",
    "idade" => 38,
    "salario" => 1450.40,
    "Ativo" => true
];

var_dump($funcionario);

 echo $funcionario["cargo"];

 #array Multidimensional

 $funcionarios = [
    [
        "nome" => "Reginaldo Rodrigues", 
        "cargo" => "MEP",
        "idade" => 38,
        "salario" => 1450.40,
        "Ativo" => true,
        "Cursos" => ["web", "PHP", "javascript"]
    ],
    [
        "nome" => "João", 
        "cargo" => "MEP",
        "idade" => 45,
        "salario" => 2000,
        "Ativo" => false,
        "Cursos" => []
    ],
    [
        "nome" => "Lurdinha", 
        "cargo" => "MEP",
        "idade" => 50,
        "salario" => 1500,
        "Ativo" => true,
        "Cursos" => ["Photshop", "Ilustrator"]
    ]
    
   
];

var_dump($funcionarios);

echo "nome: ". $funcionarios[2]["nome"];
echo "<br>";
echo "cargo: ". $funcionarios[2]["cargo"];
echo "<br>";
echo "curso: ". $funcionarios[2]["Cursos"][0];

echo "<hr>";

foreach ($funcionarios as $item){
    echo "nome: ".$item["nome"];
    echo "<br>";
    echo "cargo: ".$item["cargo"];
    echo "<br>";
    echo "Idade: ".$item["idade"];
    echo "<hr>";
}
