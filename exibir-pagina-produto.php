<section>
    <?php
            
    $nomeProduto = $_POST['txProduto'];
    $valorProduto = $_POST['txValor'];
    $categoriaProduto = $_POST['txCategoria'];
    $quantidadeProduto = $_POST['txQuantidade'];

    $nomeProduto = strtoupper($nomeProduto);
    $valorProduto = strtoupper($valorProduto);
    $categoriaProduto = strtoupper($categoriaProduto);
    $quantidadeProduto = strtoupper($quantidadeProduto);

    echo "<p> Nome do Produto: " . $nomeProduto . "</p>";
    echo "<p> Valor do Produto: " . $valorProduto . "</p>";
    echo "<p> Categoria do Produto: " . $categoriaProduto . "</p>";
    echo "<p> Quantidade do Produto: " . $quantidadeProduto . "</p>";
    
    //echo strtoupper("allan");
    
  
    ?>

</section>