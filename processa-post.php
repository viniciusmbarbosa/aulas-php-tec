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
    
     //$nome = filter_var($_POST["nome"], FILTER_SANITAZE_SPECIAL_CHARS);   
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    //$nome = $_POST["nome"];
    $email = $_POST["email"];
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    //$idade = $_POST["idade"];
    $idade = filter_input(INPUT_POST, "idade", FILTER_SANITIZE_NUMBER_INT);
    
    //$mensagem = $_POST["mensagem"];
    $mensagem = filter_input(INPUT_POST, "mensagem", FILTER_SANITIZE_SPECIAL_CHARS);

    //$interesse = isset($_POST['interesses']) ? $_POST ['Interesse'] : []; 
    
    //solução 2
    // Solução usando operadoe de coalescência: ??
    //(disponível a partir da versão 7 do php)
    //$interesses = $_POST["interesse"] ?? [];
    $interesses = filter_var_array(
        $_POST["interesses"] ?? [],
        FILTER_SANITIZE_SPECIAL_CHARS
    );
    ?>

    
    <h2>Dados:</h2>
    <ul>

        <li>Nome: <?=$nome?></li>
        <li>E-mail: <?=$email?></li>
        <li>Idade: <?=$idade?></li>

        <?php if( !empty($interesses)) { ?>
        <!--  Transformando o array $interesses em string -->
        <li>Interesse: <?=implode(",", $interesses)?></li>

        <li>Interesse:
            <ul>
                <?php foreach($interesses as $interesse){ ?>
                <li><?=$interesse?></li>
                <?php } ?>
            </ul>
        </li>

        <?php } ?>

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