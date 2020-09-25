<?php require("cabecalho.php"); ?>

<section>
    <h1> Página de Produtos </h1>
</section>

<section>
<div>
    <form action="exibir-pagina-produto.php" method="post">
        <div>
            <font color = "white"><label> Produto: </label></font>
            <input type="text" placeholder="Nome do Produto" name="txProduto" />
        </div>
        <br>
        <div> 
            <font color = "white"><label> Valor: </label></font>                  
            <input type="text" placeholder="Valor do produto" name="txValor" />             
        </div>
        <br>
        <div>
            <font color = "white"><label> Categoria: </label></font>
            <input type="text" placeholder="Categoria do Produto" name="txCategoria" />    
        </div>
        <br>
        <div>
            <font color = "white"><label> Quantidade: </label></font>
            <input type="text" placeholder="Quantidade por extenso" name="txQuantidade" />    
        </div>
        <br>
        <div>
            <input type="submit" value="Exibir em maiúsculo"/>    
        </div>
    </form>
</div>
</section>

<?php require("rodape.php"); ?>