<?php

echo "Atividade 1: ";
echo "<br>";

$nome = "Reginado";
$sobrenome = "Rodrigues";
$data = "30/11/1982";
$fatura = 800.90;

echo "Olá $nome $sobrenome, não esqueça de pagar sua fatura no dia $data.";
echo"<br>";
echo "Valor da Fatura: R$". number_format($fatura, 2, "," ,".");


?>