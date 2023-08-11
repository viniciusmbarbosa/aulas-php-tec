<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Informações do formulário</title>
</head>
<body>
 <?php  
 
 if( empty($_POST["nomeProduto"]) || empty($_POST["preco"])) { ?>
    <div class="container">
        <p class="fs-1">Erro:401</p>
        <p class="fs-3 text-danger ">É necessário preencher todos os campos!</p>
        <a class="btn btn-primary fs-4" href="exercicio06.php">Voltar</a>
    </div>
<?php } else{

/* Esse if isset é desnecessário.
Afinal, você já tinha definido no action do formulário
redirecionando pra cá. */
if (isset($_POST["enviar"])){

    /* Sanitizações estão corretas */
    $nomeProduto = filter_input(INPUT_POST, "nomeProduto", FILTER_SANITIZE_SPECIAL_CHARS);
    $preco = filter_input(INPUT_POST, "preco", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $disponibilidade = filter_input(INPUT_POST, "disponibilidade", FILTER_SANITIZE_SPECIAL_CHARS);
    $descricao = filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_SPECIAL_CHARS);
    $fabricante = filter_input(INPUT_POST, "fabricante", FILTER_SANITIZE_SPECIAL_CHARS);

    
}
    

?>

<div class="container w-md-50">
    <h1 class="bg-primary text-white p-3 rounded">Cadastro de produtos</h1>
    
    <ul class="fs-4 border rounded shadow-none p-3 mb-5 bg-body-tertiary" style="list-style: none;">
        <li>Nome: <?=$nomeProduto?></li>
        <li>Fabricante: <?=$fabricante?></li>
        <li>Preço: R$<?=number_format($preco, 2, ",",".")?></li>
        <li>Disponibilidade: <?=$disponibilidade?></li>
        <li>Descrição:<?=$descricao?></li>
    </ul>
    <?php
    
    }
    
    ?>
</div>
</body>
</html>