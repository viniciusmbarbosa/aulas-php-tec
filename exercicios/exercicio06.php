<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fomulário Em PHP</title>
    <style>
    </style>
</head>

<body>

    <h1>Formulário</h1>
    <hr>


    <?php
    $fabricantes = ["-", "loja1", "loja2", "loja3"];
    ?>


    <h2>Cadastro</h2>
    <div>
        <form action="metodo-post.php" method="post">
            <p>
                <label for="nome">Nome:</label>
                <input required name="nomeProduto" type="text"><br>
            </p>

            <p>

                <label for="fabricante">Fabricante:</label>
                <select name="fabricante" id="fabricante">
                    <?php
                    foreach ($fabricantes as $fabricante) { ?>
                        <option value="<?= $fabricante; ?>"><?= $fabricante ?></option>

                    <?php } ?>
                </select>


            </p>

            <p>

                <label for="preco">Preço</label>
                <input required type="number" name="preco" id="preco" min="100" max="10000"><br>
            </p>


            <p>
            <h3>Disponibilidade </h3>
            <label for="">Sim</label>
            <input type="radio" name="disponibilidade" id="sim">
            <label for="opcao">Não</label>
            <input type="radio" name="disponibilidade" id="nao"><br>
            </p>

            <p>

                <label for="descricao">Descrição do produto </label><br>
                <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
                <button type="submit" name="enviar">Enviar</button>
            </p>
            <?php

            ?>
        </form>
    </div>

</body>

</html>