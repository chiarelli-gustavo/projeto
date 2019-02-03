<!-- 
<script type="text/javascript">
            var x = 0;
            function alteraMais(x) {
                total = parseFloat(document.getElementById('total').innerHTML);
                preco = parseFloat(document.getElementById('preco').value);
                valorInicial = parseInt(document.getElementById('estoque'+x).value);
                valorFinal = valorInicial + 1;
                document.getElementById('estoque'+x).value = valorFinal;
                total = total + preco;
                document.getElementById('total').innerHTML = total;
            }
            function alteraMenos(x) {
                total = parseFloat(document.getElementById('total').innerHTML);
                preco = parseFloat(document.getElementById('preco').value);
                valorInicial = parseInt(document.getElementById('estoque'+x).value);
                valorFinal = valorInicial - 1;
                document.getElementById('estoque'+x).value = valorFinal;
                total = total - preco;
                document.getElementById('total').innerHTML = total;
            }
        </script>

-->
<!DOCTYPE html>
<html>
    
    <?php include 'head.php';?>

    <body>
    
        <header class="container_fluid">
            <?php            
                session_start();
                if(!isset($_SESSION['email'])) {
                    include ('navbar.php');
                    }
                        else {
                            include ('navbar_usuario_logado.php');
                        }
            ?>
        </header>

        <div class="container-fluid">
        <img src="imagens/tema-livraria-2600.jpg" alt="Livra" class="ml-0" width="100%">
        <!-- Antes dentro da tag img tinha o seguinte parâmetro: width="100%"-->
        </div>

        <section class="container">
            <div class="row">

                <div class="col-12 mt-4">
                    <h4 class="display-4 text-center">Carrinho de Compras</h4>
                </div>
                <?php
                $soma = 0;                

                foreach ($_SESSION['carrinho'] as $indice => $valor) : 
                    ?>                        
                        
                        <div class="col-12 list-group-item text-center mt-3">

                            <div class="col-md-1 float-left">
                                <h6 class="mt-4">Item: </h6>
                                <span><h6  class="mt-1"><?php echo ($indice+1); ?></h6></span>
                            </div>

                            <div class="col-md-2 float-left">
                                <a href="produto.php?id=<?php echo $valor['id']; ?>">
                                    <img class="mt-2 mb-2" src="imagens/<?php echo $valor['foto']; ?>" height="100"/>
                                </a>
                            </div>

                            <div class="col-md-3 float-left">

                                <span><h4  class="mt-4"><?php echo $valor['titulo']; ?></h4></span>

                                <span><h6 class="d-inline">Autor: </h6><?php echo $valor['autor']; ?></span><br/>

                            </div>

                            <form action="atualizaPreco.php" method="post">

                                <div class="col-md-2 float-left">
                                    <h6 class="mt-4">Quantidade: </h6>
                                    <input class="align-middle mt-1" type='number' value="<?php echo $valor['quant']; ?>" min="1" name="qtd" max="<?php echo $valor['estoque']; ?>">
                                    <button type="submit" class="btn btn-dark btn-sm mt-1 ">Atualizar</button>
                                </div>

                                <div class="col-md-3 float-left">
                                    <h6 class="mt-4">Subtotal: </h6><h4 class="d-inline">R$<?php echo number_format($valor['subtotal'], 2, ',', '.'); ?></h4>
                                    <!-- input type='hidden' value="<?php echo $valor['preco']; ?>" name="preco" -->
                                    <input type='hidden' value="<?php echo $indice; ?>" name="indice">
                                </div>
                            </form>

                            <form action='excluirItem.php' method='POST' class="col-md-1 float-right">
                                <input type='hidden' name='item' value='<?php echo ($indice+1); ?>'>
                                <input type='hidden' name='titulo' value='<?php echo $valor['titulo']; ?>'>
                                <button type="submit" class="btn btn-danger btn-sm px-2 py-0 mt-5 mb-3">X</button>
                            </form>
                        </div>          
                    
                    <?php
                    $soma += $valor["subtotal"];
                endforeach
                ?>

                <?php                   

                        if(!empty($_SESSION['carrinho'])) {
                          ?>
                            <div class="col-12 mt-4">
                            <h5 class="text-right" id="total">Total: R$<?php echo number_format($soma, 2, ',', '.'); ?></h5><br>                    
                        </div>

                        <div class="col-md-12">
                            <form method="POST" action="#" class="col-md-1 text-right float-sm-right" >
                                <span>
                                    <button type="submit" class="btn btn-warning text-black-50"><strong>Comprar</strong></button>
                                </span>
                            </form>

                            <form method="POST" action="limpar_carrinho.php" class="col-md-1 text-right float-sm-left" >
                                <span >
                                    <button type="submit" class="btn btn-dark text-white-50 mt-2"><strong>Limpar Carrinho</strong></button>
                                </span>
                            </form>
                        </div>
                        <?php
                       } else {
                        echo '
                        <div class="text-center col-12 mt-5">
                            <p>Nenhum item adicionado ao carrinho!</p>
                        </div>';
                       }
                ?>

                

                <br><br><br>

            </div>
        </section>
        
        <?php include 'footer.php';?>
        
    </body>

</html>