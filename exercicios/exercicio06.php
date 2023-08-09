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

    <h2>Cadastro</h2>
    <div>
        <form action="metodo-post.php" method="post">
            <p>
                <label for="nome">Nome:</label>
                <input required type="text"><br>
            </p>

            <p>
                
                <label for="fabricante">Fabricante:</label>
                <select name="fabricante" id="fabricante">
                <?php  
                $fabricantes = array("loja1", "loja2","loja3");         
                foreach($fabricantes as $fabricante){ ?>
                <option value="#"><?=$fabricante?></option>
        
            <?php } ?>
        </select>


            </p>

            <p>
                
                <label for="preco">Preço</label>
                <input required type="number" name="100" id="10000"><br>
            </p>


            <p>
                <h3>Disponibilidade </h3>
                <label for="">Sim</label>
                <input type="radio" name="selecao" id="sim">
                <label for="opcao">Não</label>
                <input type="radio" name="selecao" id="nao"><br>
            </p>

            <p>
                
                <label for="">Descrição do produto </label><br>
                <textarea name="descricao" id="" cols="30" rows="10"></textarea>
                <button type="submit" name="enviar">Enviar</button>
            </p>
        </form>
    </div>

</body>

</html>