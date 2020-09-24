<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Produto</title>
</head>
<body>

<section>
    <h1> Página de Produtos </h1>
</section>

<div>
    <form action="exibir-pagina-produto.php" method="post">
        <div>
            <label>Produto:</label>
            <input type="text" placeholder="Nome do Produto" name="txProduto" />
        </div>
        <br>
        <div> 
            <label> Valor: </label>                   
            <input type="text" placeholder="Valor do produto" name="txValor" />             
        </div>
        <br>
        <div>
            <label> Categoria: </label>
            <input type="text" placeholder="Categoria do Produto" name="txCategoria" />    
        </div>
        <br>
        <div>
            <label> Quantidade: </label>
            <input type="text" placeholder="Quantidade por extenso" name="txCategoria" />    
        </div>
        <br>
        <div>
            <input type="submit" value="Exibir em maiúsculo"/>    
        </div>
    </form>
</div>


    
</body>
</html>