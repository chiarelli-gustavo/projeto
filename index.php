<!DOCTYPE html>
<html>
    
    <?php include 'head.php'?>
    
    <body>

        <header class="container_fluid">
        <?php            
            session_start();
            if(!isset($_SESSION['email'])) {
                include ('navbar.php');
                }else {
                    include ('navbar_usuario_logado.php');
                }
        ?>
        </header>

        <div class="container-fluid">
            <img src="imagens/tema-livraria-2600.jpg" alt="Livra" class="ml-0" width="100%">
        </div>
        
        <div style="text-align:right" class="text-align-right p-2 font-weight-light">
            Data: <?php include 'data.php'?>                    
        </div>

        <section class="container">
            <div class="row">

                <?php
                require_once 'conexao.php';
                $sql = "SELECT * FROM livros";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                ?>

                    <div class="col-sm-6 col-md-4 col-lg-3 mt-5 align-self-xl-stretch">
                        <section class="list-group align-self-xl-strech min-height">

                            <span class="list-group-item list-group-item-secondary text-center link-sem-decoracao">
                                <a href="produto.php?id=<?php echo $row['id']; ?>">
                                    <img src="imagens/<?php echo $row['foto']; ?>" height="200"/>
                                </a>

                                <h3 class="titulos-overflow mt-2"><?php echo $row['titulo']; ?></h3>
                                <!-- A classe min-height-titulos deixa o card maior, pois determina que o tamanho dessa divisão será o tamanho da altura correspondente ao maior nome de titulo.-->
                            </span>

                            <span class="list-group-item">                                
                                <span><strong><?php echo $row['autor']; ?></strong></span><br>
                                
                                <span><?php echo $row['editora']; ?></span>

                                <span style="width: 90%, height: 1px, background-color: #ddd;"></span> 

                                <hr>

                                <span class="mt-2">
                                    <h4>R$<?php echo $row['preco']; ?></h4>
                                </span> <br/>

                                <form class="text-center" method="POST"  action="adicionar_produto_ao_carrinho.php?<?php echo $row['id']; ?>">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <input type="hidden" name="titulo" value="<?php echo $row['titulo']; ?>">
                                    <input type="hidden" name="autor" value="<?php echo $row['autor']; ?>">
                                    <input type="hidden" name="ano" value="<?php echo $row['ano']; ?>">
                                    <input type="hidden" name="editora" value="<?php echo $row['editora']; ?>">
                                    <input type="hidden" name="genero" value="<?php echo $row['genero']; ?>">
                                    <input type="hidden" name="preco" value="<?php echo $row['preco']; ?>">
                                    <input type="hidden" name="foto" value="<?php echo $row['foto']; ?>">
                                    <input type="hidden" name="descricao" value="<?php echo $row['descricao']; ?>">
                                    <input type="hidden" name="estoque" value="<?php echo $row['estoque']; ?>">
                                    <input type="hidden" name="quant" value="1">
                                    <input type="hidden" name="subtotal" value="<?php echo $row['preco']; ?>">
                                    <input type="hidden" name="isbn" value="<?php echo $row['isbn']; ?>">
                                    
                                    <span class="mt-3">
                                        <?php
                                            if ($row['estoque']==0){
                                                echo '<button type="submit" class="btn btn-danger" disabled>Produto Indisponível</button>';
                                            }else{
                                                echo '<button type="submit" class="btn btn-success">Adicionar ao Carrinho</button>';
                                                } 
                                        ?>
                                    </span>
                                </form>
                            </span>
                        </section>
                    </div>

                <?php
                }
                } 
                else {
                echo "Nenhum livro encontrado no Banco de Dados.";
                }
                mysqli_close($conn);
                ?>
            </div>

            <br/><br/>
        </section>

        <?php include 'footer.php'?>

    </body>
</html>