<?php
/* Fazendo a inclusão de um arquivo de recursos */
include "recursos.php"

/* A diferença entre eles é na forma como lidam no caso de acontecer algum erro na inclusão.

Erros de carregamento com include, dão alertas (warnings) mas NÂO PARAN conpletanebte a aplicação.

Erros de carregamento com require, dão erro fatal (falta erro), e PARAM completamente a aplicação. */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modularização e inclusão de recursos</title>
</head>

<body>
    <h1>Modularização e Inclusão de recursos</h1>
    <hr>

    <h2><?= ESCOLA ?></h2>
    <p>Estamos fazendo o curso de <?= $curso ?></p>

    <ul>
        <?php
        foreach ($tecnologias as $tecnologia){ ?>

        <li> <?=$tecnologia?></li>
        <?php
        }
        ?>
    </ul>

    <p>O aluno Fulano tem 20 anos</p>

    <article>
        <h2>Título qualquer...</h2>
        <?php include "texto.php"?>
    </article>


</body>

</html>