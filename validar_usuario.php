<?php require("cabecalho.php"); ?>

<?php
    $email = $_POST["emailUser"];
    $senha = $_POST["senhaUser"];

    $verifEmail = "admin@gmail.com";
    $verifSenha = "admin123";

    if (strcmp($email,$verifEmail) == 0  && strcmp($senha,$verifSenha) == 0) {
        echo "<p> Login realizado com sucesso! </p>";
    }
    else {
        echo "<p> E-mail ou senha inválidos!";
    }


?>
<?php require("rodape.php"); ?>