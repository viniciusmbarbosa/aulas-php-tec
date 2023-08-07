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
    <pre><?= var_dump($nome) ?></pre>
    <pre><?= var_dump($nomeSemEspaco) ?></pre>

    <h3>str_replace()</h3>
    <?php
    /* Funcão que permite suvstituição de string/caracteres. */
    $fraseFeia = "<p>Fulano é um bobão e xarope</p>";
    $fraseBonitinha = str_replace(["xarope", "bobão"], "******", $fraseFeia);

    ?>
    <p><?= $fraseFeia ?></p>
    <p><?= $fraseBonitinha ?></p>

    <h3>explode()</h3>
    <?php
    /* Função que transforma uma string em um array */

    $linguagens = "HTML - CSS - JS - PHP";
    $arrayLinguagens = explode(" - ", $linguagens);
    ?>
    <pre><?= var_dump($linguagens) ?></pre>
    <pre><?= var_dump($arrayLinguagens) ?></pre>

    <h2>Numérica</h2>

    <h3>min, max, round</h3>
    <?php
    $valores = [10, 5, 50, 1000, 275];
    $valoresQualquer = 1259.75;
    ?>
    <p>Menor valor: <?= min($valores) ?></p>
    <p>Maior valor: <?= max($valores) ?></p>
    <p>Arredondado: <?= round($valoresQualquer) ?></p>

    <h2>Array</h2>

    <h3>Implode()</h3>
    <?php
    /* Função que transforma array em string */
    $bandas = ["Rush", "Sleyer", "Dio"];
    $textoBandas = Implode(" - ", $bandas);
    ?>
    <pre><?= var_dump($bandas) ?></pre>
    <pre><?= var_dump($textoBandas) ?></pre>

    <h3>extract()</h3>
    <?php
    /*Função que extrai chaves associativas para variáveis  */
    $aluno = [
        "id" => 1,
        "nome" => "Chave do 8",
        "idade" => 25,
    ];
    extract($aluno);
    ?>

    <ul>
        <li>Nome:<?= $nome ?></li>
        <li>ID:<?= $id ?></li>
        <li>Idade: <?= $idade ?></li>
    </ul>

    <h3>array_sum</h3>
    <?php
    /* Função para somar os valores de um array */
    $total = array_sum($valores);

    ?>
    <p>Soma dos valores: <?= $total ?></p>

    <h3>Array_unique()</h3>

    <?php
    /*  Função que retorna um novo array  com dados únicos. */
    $produtos = [
        "TV", "Notebook", "TV", "Geladeira", "Monitor", "Notebook", "Teclado", "Mouse"
    ];

    $produtosUnicos = array_unique($produtos);

    ?>
    <pre><?= var_dump($produtos) ?></pre>
    <pre><?= var_dump($produtosUnicos) ?></pre>

    <h2>Filtros</h2>
    <p>Recurso de análise e limpeza de dados aplicado através das funções <code>filter_var</code> e <code>filter-input()</code>.</p>
    <h3>Validação</h3>
    <?php
    $email = "tiago.com.br"

    /* Se o e-mail informado for inválido, ou seja, se não seguir o padrao geral de endereços de e-mail, a função abaixo retornará */
    ?>
    <pre>
    <?= var_dump(filter_var($email, FILTER_VALIDATE_EMAIL)) ?>
</pre>

    <h3>Sanitização</h3>
    <!-- Cross script -->
    <?php
    $ataque = "<script>
    document.body. innerHTML = '<h1>Sou ráqui!! ahahha :c </h1>'
    </script>";
    // Execução sem sanitização (script é válidado)

    //echo $ataque

    $ataqueSanitizado = filter_var(
        $ataque, FILTER_SANITIZE_SPECIAL_CHARS
    );

    //Execução com sanitização  (Script e anulado)
    Echo $ataqueSanitizado;

    ?>

    <hr>
    <h2>Segurança</h2>



    <h2>Seguranças</h2>

</body>
<!-- brute force -->
</html>