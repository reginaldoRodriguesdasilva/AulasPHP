<?php

$nome ='Reginaldo Rodrigues';
$idade = 39;
$email = 'Rodriguesregy664@gmail.com';
$senha = 'Rodrigues';
$cursos = ['PHP', 'HTML', 'CSS'];

echo '<h1>Trabalhando com Estrutura condicional</h1>';

echo '<h2>Exemplo de if (se...)</h2>';

if($idade >= 18){
    echo "O usuário $nome é maior de idade.";
}

#########################################################

echo '<hr>';
echo "<h2>Exemplo de if Ternário</h2>";

echo ($idade >= 18) ? "Maior de idade" : "Memor de idade";

#####################################################

echo '<hr>';
echo '<h2>Exemplo de ife e else</h2>';


if($email == 'Rodriguesregy664@gmail.com' && $senha == 'Rodrigues'){
    echo 'Usuário Logado';
}else{
    echo 'Usuário ou senha Inválida';
}

############################################################

echo '<hr>';
echo '<h2>Exemplo 2 de if e else </h2>';

if($email == 'Rodriguesregy664@gmail.com' ){

    if( $senha == 'Rodrigues'){
        echo 'Usuário Logado';
    } else{
        echo 'Usuário ou senha Inválida';
    }  
}else{
    echo 'Usuário ou senha Inválida';
}

#########################################################

echo '<hr>';
echo "<h2>Exemplo de Multiplas Condições</h2>";

$num1 = 10;
$num2 = 20;

if($num1 == $num2){
    echo "os números são iguais";
}else if($num1 > $num2){
    echo "O número 1 é maior que o número 2";
}else {
    echo "O número 2 é maior que o número 1";
}

##########################################################

echo '<hr>';
echo "<h2>Exemplo de GET</h2>";

$menu = $_GET['menu'] ?? "Home";

switch(strtolower($menu)){
    case 'home':
        echo "Página Principal";
        break;
    case "empresa":
        echo "Página Empresa";
        break;
    case "produto":
        echo "Página Produto";
        break;
    case "contato":      
        echo "Página Contato";
        break;
    default:
        echo "Pagina Erro 404";
}

