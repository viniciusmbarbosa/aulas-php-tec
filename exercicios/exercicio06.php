<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Fomulário Em PHP</title>
    <style>
        html{
            font-size: 14px;
        }
    </style>
</head>

<body >

    <div class="container w-md-50 ">
        <h1 class="bg-primary text-white p-3 rounded col-xl-6">Formulário</h1>
        <hr class="col-xl-6">
        <?php
        $fabricantes = ["-", "Samsung", "Motorola", "LG"];
        ?>
        <div class="row col-lx-6">
            <h2>Cadastro</h2>
            <div class="mb-3 fs-4 ">
                <form class="mb-3" action="metodo-post.php" method="post">
                    <p class="col-xl-6" >
                        <label for="nome">Nome:</label>
                        <input required class="form-control" name="nomeProduto" type="text"><br>
                    </p>
                    <p class="col-6 col-md-4 col-xl-3">
                        <label for="fabricante">Fabricante:</label>
                        <select class="form-control" name="fabricante" id="fabricante">
                            <?php
                            foreach ($fabricantes as $fabricante) { ?>
                                <option value="<?= $fabricante; ?>"><?= $fabricante ?></option>
                            <?php } ?>
                        </select>
                    </p>
                    <p class="col-6 col-md-4 col-xl-3">
                        <label for="preco">Preço: </label>
                        <input class="form-control " required type="number" name="preco" id="preco" step=".01" min="100" max="10000"><br>
                    </p>
                    <p>
                    <h3>Disponibilidade </h3>
                    <label for="">Sim</label>
                    <input value="Sim" type="radio" name="disponibilidade" id="sim">
                    <label for="opcao">Não</label>
                    <input value="Não" type="radio" name="disponibilidade" id="nao"><br>
                    </p>
                    <p class="col-xl-6">
                        <label for="descricao" class="form-label">Descrição do produto </label><br>
                        <textarea class="form-control row-3 "  placeholder="Mensagem:" name="descricao" id="descricao" cols="30" rows="10"></textarea><br>
                        <button class="btn btn-primary fs-4" type="submit" name="enviar">Enviar</button>
                    </p>
        </div>
                <?php
                ?>
            </form>
        </div>
    </div>

</body>

</html>