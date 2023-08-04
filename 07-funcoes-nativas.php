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


    <h2>Numérica</h2>
    
    <h2>Array</h2>

    <h2>Filtros</h2>

    <h2>Seguranças</h2>

</body>
</html>