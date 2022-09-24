<?php

function soma($num1, $num2)
{
    $total = $num1 + $num2;

    return $total;
}
    echo soma(10, 9);

   //echo "<hr>";

    function subitracao($num1, $num2)
    {
        $total = $num1 - $num2;

        return $total;
    }
    
    // echo "<hr>";

    function divisao($num1, $num2)
    {
        $total = $num1 / $num2;

        return $total;
    }

    // echo "<hr>";

    function mutiplicacao($num1, $num2)
    {
        $total = $num1 * $num2;

        return $total;
    }

    echo "<hr>";

    echo subitracao(20, 5);

    echo "<hr>";

    echo divisao(30, 3);

    echo "<hr>";

    echo mutiplicacao(2, 2);

    echo "<hr>";

    function par_ou_impar($num)
    {
        if($num % 2 == 0){
            return "O numeno é par:";
        }
            return "O numero é impar";
        
    }
    echo par_ou_impar(3);

    echo "<hr>";

    function par_ou_impar_mod2($numero){
        return ($numero % 2==0)? "Número é par" : "Número é impar";
    }
        echo par_ou_impar_mod2(20);

    echo "<hr>";

    function par_ou_impar_mod3($num)
    {
        if($num % 2 == 0){
            return "O numeno é par";
        }else{
            return "O numero é impar";}
            
        
    };
    echo par_ou_impar_mod3(3);


    echo "<hr>";

    function geradoSenhaComFor($senhaInicial, $senhaFinal){

        for($contador = $senhaInicial; $contador <= $senhaFinal; $contador++){
            echo $contador. "-";
        }
    }
    geradoSenhaComFor(10, 20);

    echo "<hr>";

    function geradoSenhaComFor_2($senhaInicial = 1, $senhaFinal = 10){

        for($contador = $senhaInicial; $contador <= $senhaFinal; $contador++){
            echo $contador. "-";
        }
    }
    geradoSenhaComFor_2(1, 20);
    
    echo "<hr>";

    function geradoSenhaComWhile($senhaInicial = 1, $senhaFinal = 10){

      $contador = $senhaInicial;

      while($contador <= $senhaFinal){
          echo $contador. "-";
          $contador++;
      }
    }
    geradoSenhaComWhile(1, 5);
    

    echo "<hr>";

    function subitracao_mutiplicacao($num1, $num2,$num3)
    {
        $total = ($num1 - $num2) * $num3;

        return $total;
    }
    echo subitracao_mutiplicacao(40, 9, 3);