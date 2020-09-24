<?php require("cabecalho.php"); ?>

<?php
    $categoria = $_POST["catProd"];
    $UpderCaseCat = ucfirst($categoria);

    echo "<p>$UpderCaseCat</p>";

?>  
<?php require("rodape.php"); ?>