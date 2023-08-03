<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções no PHP</title>
</head>
<body>
    <h1>Criando e usando funções</h1>
    <hr>
    <h2>Funções como procedimento ou sub-rotina</h2>

    <?php
    function dadosAutor(){
        echo "
        <div>";
        echo "<p>Vinícius de Miranda Barbosa</p>";
        echo "<p><a href=''>email@aa.com</a></p>";
       echo "</div>";
    }
    ?>

    <section>
        <h3>Chamada da sub-rotina/procedimento</h3>
        <?=dadosAutor()?>
          
    </section>

<?php
//Função que retorna dados
?>

<h2>Função com retorno de dados</h2>
<?php 
function dadosCurso(){
    /* return "Técnico em Informática para Internet"; */
    return "<b>Encher o saco no WhatsApp</b>";

}
?>
<p>Estamos no curso de <?=dadosCurso()?></p>
<p><?=dadosCurso()?>é ministrado no Senac Penha.</p>

</body>
</html>