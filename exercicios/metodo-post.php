<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações do formulário</title>
</head>
<body>
 <?php  
 
 if( empty($_POST["nomeProduto"]) || empty($_POST["preco"])) { ?>
    <p>O produto e o nome precisam ser preenchido!!</p>
    <a href="exercicio06.php">Voltar</a>
<?php } else{

if (isset($_POST["enviar"])){
    $nomeProduto = filter_input(INPUT_POST, "nomeProduto", FILTER_SANITIZE_SPECIAL_CHARS);
    $preco = filter_input(INPUT_POST, "preco", FILTER_SANITIZE_NUMBER_INT);
    $disponibilidade = filter_input(INPUT_POST, "disponibilidade", FILTER_SANITIZE_SPECIAL_CHARS);
    $descricao = filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_SPECIAL_CHARS);
    $fabricante = filter_input(INPUT_POST, "fabricante", FILTER_SANITIZE_SPECIAL_CHARS);

    
}
    

?>

<h1>Cadastro de produtos</h1>
 
<ul style="list-style: none;">
    <li>Nome: <?=$nomeProduto?></li>
    <li>Fabricante: <?=$fabricante?></li>
    <li>Preço: <?=$preco?></li>
    <li>Disponibilidade: <?=$disponibilidade?></li>
    <li>Descrição:<?=$descricao?></li>
</ul>
<?php

} 

?>
</body>
</html>