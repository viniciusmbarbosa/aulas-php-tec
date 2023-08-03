<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    
    $nome = "pereira";

    function calcular(float $nota1, float $nota2):float {
      $media = ($nota1 + $nota2) / 2;
      return $media;
    }


$nota1 = 5;
$nota2 = 10;

$media = calcular($nota1,$nota2);
echo $media;

function situacao ($valordaMedia){

if ($valordaMedia >= 7) {
    echo "Aprovado";
} else {
    echo "Reprovado";
}


}

?>
<p><?=situacao($media)?></p>

</body>
</html>