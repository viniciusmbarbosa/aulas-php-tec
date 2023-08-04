<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .aprovado{
            color: blue;
        }
        .reprovado{
            color: red;
        }
    </style>
</head>
<body>
    <h1>Exercício 05</h1>
    <hr>

    <?php

    function calcularMedia(float $n1, float $n2 ):float{
        //Versão 1 (variável local)
       $media = ($n1 + $n2) / 2;
        return $media;
    }

    function verificarSituacao(float $valorMedia):string {
      /*  Sintaxe alternativa usando opador ternário ?: */
        return $valorMedia >= 7 ? "aprovado" : "reprovado";
      
        /*  if($valorMedia >= 7){
            return "Aprovado";
        }else {
            return "Reprovado";
        } */
    }

    $nota1 = 8;
    $nota2 = 7;
    $media = calcularMedia($nota1, $nota2);
    $situacao = verificarSituacao($media);
    
   
    ?>

    <p ><?=$media?></p>
    <p class="<?=$situacao?>"><?=$situacao?></p>
</body>
</html>