<html>
	<head>
		<?php include 'head.php'?>
		<script>
            var = x
			function limpar(x){
				frm.submit();
			}
		</script>
	</head>
	<body>
            <?php
               session_start();

                    if(empty($_SESSION['carrinho'])) {
                      $_SESSION['carrinho'] = [];
                   }

                   array_push($_SESSION['carrinho'], $_POST);

            $soma = 0;
            $quantidade =1;
            
        include 'navbar.php'; 
            ?>
        <div class="container">
            <?php
                if(!isset($_SESSION['email'])) {
                echo "<h3>Você ainda não fez Login...</h3>";}
		
                echo "<br><h3>CARRINHO</h3><br>
                <p>Adicionado com sucesso </p>";
			     echo "<table border=1>
                        <tr>
                            <th>IMAGEM</th>
                            <th>ID</th>
                            <th>PRODUTO</th><th>PRECO</th>
                            <th>QT</th><th>&nbsp;</th>
                        </tr>";

			     foreach ($_SESSION['carrinho'] as $indice => $valor){
                    echo "<tr>
                        <td width=7%>
                            ".($indice+1)."
                        </td>                        
                        <td width=12%>
                            <img src=imagens/{$valor['foto']} width=100px>
                        </td>
                        
                        <td width=40%>
                            {$valor['titulo']}
                        </td>
                        <td>
                            {$valor['preco']}
                        </td>
                        <td width=5%>
                            <input type='number' value={$quantidade} min='1' max='{$valor['estoque']}'>
                        </td>
                        <td>
                            <button type='submit' onclick='limpar({$valor['id']})'>X</button> 
                        </td>
                    </tr>";
                     $valor['estoque'] =
                     
				$soma += $valor['preco'];
                }

			 echo "<tr>
                    <td colspan=3 align='right'><h2>TOTAL</h2></td>
                    <td colspan=3 align='center'><h2>{$soma}</2></td>
                    </tr></table>";
		?>
		<br>
		<div class="row">
          <div class="col-lg-3 col-md-4 col-sm-6 mt-3 align-self-xl-stretch">
                <span>
                   <a href="index.php">Continuar Comprando</a>
                </span>

                <span>
                    <form id="frm" action="pagamento.php" method="post">
                        <button type="submit" class="btn btn-success">Fechar a compra</button>
                    </form>
                </span>
                <span>  
                    <form id="frm" action="limpar-carrinho.php" method="post">
                        <button type="submit" class="btn btn-danger">Limpar o carrinho</button>
                    </form>
                 </span>
            </div>
        </div>
    </div>
	</body>
</html>