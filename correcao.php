<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercício 05</h1>
    <hr>

    <?php
    $nota1 = 8;
    $nota2 = 7;
    $media = ($nota1 + $nota2) / 2;

    if($media >= 7){
        $situacao = "aprovado";
    }else{
        $situacao = "reprovado";
    }

    ?>

    <p><?=$media?></p>
    <p><?=$situacao?></p>
</body>
</html>