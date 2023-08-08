<?php
$pagina =  basename($_SERVER['PHP_SELF']);


    switch($pagina){
    case 'index.php': $titulo = "Página Inicial";break;
    case 'cursos.php': $titulo = "Curso"; break;
    case 'duvidas.php': $titulo = "Dúvida"; break;
    default: $titulo = "Contato"; break;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    
    <title><?=$titulo?> PHP</title>
</head>

<body>
    <header>
        <h1>Site PHP</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="cursos.php">Cursos</a>
            <a href="duvidas.php">Dúvidas</a>
            <a href="contato.php">contato</a>
        </nav>
    </header>

    <main>