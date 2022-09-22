<?php

$pessoa = [
    1 => [
        'nome' => 'João Batista',
        'cargo' => 'Professor',
        'competencia' => [
            'informatica' => ['Word', 'excel'],
            'formacao' => ['Analista de Sistema', 'Pós em Desenvolvimento de Softwre']
        ]
        ],
        2 => [
            'nome' => 'Maria dos Santos',
            'cargo' => 'Enfermeira',
            'competencia' => [
                'informatica' => ['Word', 'excel', 'power pooint', 'internet'],
                'formacao' => [
                    'Enfermeira' => 
                    'Especialista Centro Cirurgico'],
                    'Pós em Urgencia'
                ],
                 ]
        ];
    echo '<pre>';

print_r($pessoa);

echo '</pre>';


echo '<hr>';

echo $pessoa[1]["competencia"]["formacao"][1];

echo "<br>";

echo $pessoa[2]["competencia"][0];  

echo "<br>";

echo $pessoa[2]["competencia"]["formacao"]["Enfermeira"];