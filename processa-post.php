<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento POST</title>
</head>
<body>
    <h1>Exemplo usando POST</h1>
    <hr>
    <p>Receber e processar dados via <b>POST</b></p>

    <?php

    /* || significa ou */
    if( empty($_POST["nome"]) || empty($_POST["email"]) ){?>
        <p>Você deve preencher nome e e-mail</p>
        <p><a href="10-formulario.html">Voltar</a></p>
    <?php 
    }else{

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];
    
    //$interesse = isset($_POST['interesses']) ? $_POST ['Interesse'] : []; 
    
    //solução 2
    // Solução usando operadoe de coalescência: ??
    //(disponível a partir da versão 7 do php)
    $interesse = $_POST["interesse"] ?? [];
    $mensagem = $_POST["mensagem"];
    ?>

    
    <h2>Dados:</h2>
    <ul>

        <li>Nome: <?=$nome?></li>
        <li>E-mail: <?=$email?></li>
        <li>Idade: <?=$idade?></li>
        
        <li>Interesse: <?=implode(",", $interesse)?></li>


        <!-- Se a variável NÃO ESTIVER VAZIA, mostre o <li> com a mensagem -->
        <?php if(  !empty($mensagem)){?>
        <li>Mensagem: <?=$mensagem?></li>
        <?php } ?>
    </ul>
    <?php
    }
    ?>
</body>
</html>