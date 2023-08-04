<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas</title>
</head>
<body>
    <h1>Exemplo de funções nativas</h1>
    <hr>

    <h2>String</h2>
    <h3>trim() - Função que remove espaços antese depois de strings.</h3>
    <?php
    $nome = "       Vinícius deve 5 paçocas   ";
    $nomeSemEspaco = trim($nome);

    ?>
    <pre><?=var_dump($nome)?></pre>
    <pre><?=var_dump($nomeSemEspaco)?></pre>

    <h3>str_replace()</h3>
    <?php
    /* Funcão que permite suvstituição de string/caracteres. */
    $fraseFeia = "<p>Fulano é um bobão e xarope</p>";
    $fraseBonitinha = str_replace(["xarope", "bobão"],"******", $fraseFeia);

    ?>
    <p><?=$fraseFeia?></p>
    <p><?=$fraseBonitinha?></p>

    <h3>explode()</h3>
    <?php
    /* Função que transforma uma string em um array */

    $linguagens = "HTML - CSS - JS - PHP";
    $arrayLinguagens = explode(" - ", $linguagens);
    ?>
    <pre><?=var_dump($linguagens)?></pre>
    <pre><?=var_dump($arrayLinguagens)?></pre>

    <h2>Numérica</h2>

    <h3>min, max, round</h3>
    <?php
    $valores = [10, 5, 50, 1000, 275];
    $valoresQualquer = 1259.75;
    ?>
    <p>Menor valor: <?=min($valores)?></p>
    <p>Maior valor: <?=max($valores)?></p>
    <p>Arredondado: <?=round($valoresQualquer)?></p>
    
    <h2>Array</h2>

    <h3>Implode()</h3>
    <?php
    /* Função que transforma array em string */
    $bandas = ["Rush", "Sleyer", "Dio"];
    $textoBandas = Implode(" - ", $bandas);
    ?>
    <pre><?=var_dump($bandas)?></pre>
    <pre><?=var_dump($textoBandas)?></pre>

    
    <h2>Filtros</h2>

    <h2>Seguranças</h2>

</body>
</html>