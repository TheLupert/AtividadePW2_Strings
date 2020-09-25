<?php require("cabecalho.php"); ?>

<section>
<div>
    <h1>Login</h1>
</div>

    <form action="validar-usuario.php" method="post">
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
</section>
    


<?php require("rodape.php"); ?>