<?php

$listaClientes = [
    'Reginaldo Rodrigues',
    'Ronaldo Rodrigues',
    'Mauro Silva'
];

$limite = 10;
$tabuada = 5;
$contagemm = 0;

echo '<h1> Trabalhando com Estrutura Laço de Repetição</h1>';

echo "<h2>Exemplo de while (enquanto ....)</h2>"; 

$contagem = 0;
while($contagem <= 10){

    echo $contagem++. ' ';
    
}

echo "<hr>";
#############################################################
echo "<h2>Exemplo de do...while</h2>";

$contagem = 0;
do{
   echo $contagem++. ' ';

}while($contagem <= 10);

echo "<hr>";
#############################################################
echo "<h2>Exemplo de for (para...)</h2>";

for($contagem = 0; $contagem <= 10; $contagem++){
    echo $contagem. ' ';
}

echo "<hr>";
#############################################################
echo "<h2>Exemplo de foreach </h2>";
 
//Ambiente de Desenvolvimento
echo var_dump($listaClientes);

//Ambiente de Produção
echo $listaClientes[1];

    echo '<br><br>';

foreach ($listaClientes as $key=> $nome){
    echo "O index/chave é: $key e o valor é: $nome";
    echo '<br>';
}

echo '<hr>';

    echo '<br><br>';
foreach ($listaClientes as $nome){
    echo "O index/chave é: $key e o valor é: $nome";
    echo '<br>';
}

echo '<hr>';

    echo '<br><br>';
foreach ($listaClientes as $nome){
    echo "O valor é: $nome";
    echo '<br>';
}