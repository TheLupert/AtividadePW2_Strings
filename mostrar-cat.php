<?php require("cabecalho.php"); ?>

<?php
    $categoria = $_POST["catProd"];
    $UpperCaseCat = ucfirst($categoria);

    echo "<p>$UpperCaseCat</p>";

?>  
<?php require("rodape.php"); ?>