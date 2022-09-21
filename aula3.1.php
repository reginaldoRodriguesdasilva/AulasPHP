
<?php
    $nomeAluno = 'Reginaldo Rodrigues';
    $curso = 'PHP';
    $frequencia = '100%';
    $nota = '9';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informação do Aluno</title>
</head>
<body>
    <h1>Dados do Aluno<h1>

    <p>
      <strong>Nome:</strong>  
         <?php echo $nomeAluno; ?>
    </p>
    <p>
      <strong>Curso:</strong>  
        <?=$curso ?>         
    </p>
    <p>
      <strong>Frequência:</strong> 
        <?=$frequencia ?>   
    </p>
    <p>
      <strong>Nota:</strong> 
         <?=$nota ?>    
    </p>

    <p>
        O aluno <?=$nomeAluno; ?>, frequentou com <?=$frequencia ?> o curso de PHP com de presença.
    </P>

    
</body>
</html>