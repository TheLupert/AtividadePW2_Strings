<?php require("cabecalho.php"); ?>


<div>
    <h1>Login</h1>
</div>

    <form action="validar_usuario.php" method="post">
        <div class="formInfo">
            <input type="email" placeholder="E-mail" name="emailUser" />
        </div>
        <div class="formInfo">
            <input type="password" placeholder="Senha" name="senhaUser" />
        </div>
        <div>
            <input class="formInfo" type="submit" value="Enviar" />
        </div>
    </form>
    


<?php require("rodape.php"); ?>