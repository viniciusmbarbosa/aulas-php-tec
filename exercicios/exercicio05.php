<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1{
        text-align: center;
    }
    .aprovado{
        color: blue;
        
    }
    .reprovado{
        color: red;
    }
    div{
        margin: auto;
        border: solid 1px black;
        width: 350px;
        background: linear-gradient(to left, #5bff00,#8aea27, #15e36e);
        height: 300px;

    }
    table, th, td{
        border: solid 1px black;
        margin: auto;

    }
    tr{
        border: solid 1px black ;
    }

</style>
<body>

<div>
    <h1>Calculando média</h1>
    <?php
    
        $nome = "Vinícius";
    
        function calcular(float $nota1, float $nota2):float {
          $media = ($nota1 + $nota2) / 2;
          return $media;
        }
    
    
    $nota1 = 10;
    $nota2 = 5;
    
    $media = calcular($nota1,$nota2);

    
    function situacao ($valordaMedia){
    
    
    if ($valordaMedia >= 7) {
            return "<p class=\"aprovado\">Aprovado!!</p>";
    } else {
        return "<p class=\"reprovado\">Reprovado!</p>";
     } 
    
    
    } ?>
    

    <table>
    <tr>
        <th>Média</th>
        <th>Nome</th>
    </tr>
    <tr>
        <td><?=situacao($media)?></td>
        <td><?=$nome?></td>
    </tr>

    </table>
    
    
</div>

</body>
</html>