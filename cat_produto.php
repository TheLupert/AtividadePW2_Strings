<?php require("cabecalho.php"); ?>


<div>
    <h1>Categoria Produto</h1>
</div>

    <form action="mostrar-cat.php" method="post">
        <div class="formInfo">
            <input type="text" placeholder="Categoria" name="catProd" />
        </div>
        <div>
            <input class="formInfo" type="submit" value="Cadastrar" />
        </div>
    </form>
    
<?php require("rodape.php"); ?>