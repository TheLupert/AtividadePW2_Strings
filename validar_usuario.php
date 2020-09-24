<?php require("cabecalho.php"); ?>

<?php
    $email = $_POST["emailUser"];
    $senha = $_POST["senhaUser"];

    $verifEmail = "admin@gmail.com";
    $verifSenha = "admin123";

    if ($email == $verifEmail && $senha == $verifSenha) {
        echo "<p> Login realizado com sucesso! </p>";
    }
    else {
        echo "<p> E-mail ou senha inválidos!";
    }


?>
<?php require("rodape.php"); ?>