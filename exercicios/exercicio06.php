<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Fomulário Em PHP</title>
    <style>
        html{
            font-size: 16px;
        }
    </style>
</head>

<body >

    <div class="container ">
        <h1 class="bg-primary text-white p-3 rounded">Formulário</h1>
        <hr>
        <?php
        $fabricantes = ["-", "Samsung", "Motorola", "LG"];
        ?>
        <h2>Cadastro</h2>
        <div class="mb-3 ">
            <form class="mb-3" action="metodo-post.php" method="post">
                <p>
                    <label for="nome">Nome:</label>
                    <input required class="form-control" name="nomeProduto" type="text"><br>
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
                    <label for="preco">Preço: </label>
                    <input class="form-control" required type="number" name="preco" id="preco" min="100" max="10000"><br>
                </p>
                <p>
                <h3>Disponibilidade </h3>
                <label for="">Sim</label>
                <input value="Sim" type="radio" name="disponibilidade" id="sim">
                <label for="opcao">Não</label>
                <input value="Não" type="radio" name="disponibilidade" id="nao"><br>
                </p>
                <p>
                    <label for="descricao" class="form-label">Descrição do produto </label><br>
                    <textarea class="form-control row-3"  placeholder="Mensagem:" name="descricao" id="descricao" cols="30" rows="10"></textarea><br>
                    <button type="submit" name="enviar">Enviar</button>
                </p>
                <?php
                ?>
            </form>
        </div>
    </div>

</body>

</html>