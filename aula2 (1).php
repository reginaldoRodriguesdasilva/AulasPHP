<?php

$nome = "Reginaldo Rodrigues";

echo $nome;

$idade = 39;

echo"<br>";

echo($idade);

//Comentario
#comentario 

/*
comentario em blocos 
...
*/

echo"<hr>";

$salario = 1985.65;

echo $salario;

echo"<hr>";

echo "R$ " . number_format($salario, 2, "," ,".");

echo"<hr>";

$nome = "Reginaldo";
$sobrenome = "Rodrigues";

echo $nome. " ". $sobrenome;

echo"<hr>";

echo "Meu nome é: $nome {$sobrenome}";  ///outro jeito de fazer string, usandos aspas duplas "", tambem da pra usar em outros programas as {} para diferenciar variaveis do texto.

echo"<hr>";
echo "Meu nome é: $nome $sobrenome";   ///usando aspas simples '' , sua execução é mais rapida tambem, por isso ela é usada!!

echo"<hr>";

echo "A caixa d\água esta vazia";      /// a barra invertida é um escape dos caracteres iguais, é como se ele pulasse pro próximo, (melhor usar as aspas )

echo"<hr>";

//Aula de "PHP"

echo "Aula de PHP";
echo "<br>";
echo "Aula de \"PHP\"";





?>