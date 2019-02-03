<!DOCTYPE html>
<html>

    <?php include 'head.php';?>

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
            
            <img src="imagens/tema-livraria-2600.jpg" width="100%" alt="estante virtual cheia de livros" class="ml-0">

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

                <div class="col-lg-3 col-md-4 col-sm-6 mt-5 align-self-xl-stretch">
                   
                    <section class="list-group align-self-xl-strech min-height">
                        <a href=produto.php?id=<?php echo $row['id']; ?>>
                            <span class="list-group-item list-group-item-secondary text-center">
                                <img src="imagens/<?php echo $row['foto']; ?>" class="text-center" height="240px"/>
                                <h3 class="min-height-titulos titulos-overflow"><?php echo $row['titulo']; ?></h3>
                            </span>
                        </a>
                        
                        <span class="list-group-item">
                                    <strong><?php echo $row['autor']; ?></strong><br>
                                    <span><?php echo $row['editora']. $row['ano']; ?></span> 
                                    <span style="width: 90%, height: 1px, background-color: #ddd;"></span> <br/>
                                  <hr>
                                    <span class="mt-2"><h4>R$<?php echo $row['preco']; ?></h4></span> <br/>
                                    <div class="mt-3">
                                  </div>
                                  <div class="mt-3">
                                        <form action="adicionar-carrinho.php" method="post">
											<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                            <input type="hidden" name="titulo" value="<?php echo $row['titulo']; ?>">
                                            <input type="hidden" name="autor" value="<?php echo $row['autor']; ?>">
                                            <input type="hidden" name="editora" value="<?php echo $row['editora']; ?>">
                                            <input type="hidden" name="genero" value="<?php echo $row['genero']; ?>">
                                            <input type="hidden" name="preco" value="<?php echo $row['preco']; ?>">
                                            <input type="hidden" name="foto" value="<?php echo $row['foto']; ?>">
                                            <input type="hidden" name="estoque" value="<?php echo $row['estoque']; ?>">
											<span class="mt-3">
                                                <?php
                                        if ($row['estoque']==0){
                                        echo '<button type="submit" class="btn btn-danger" disabled>Produto Indisponível</button>';
                                        }else{
                                        echo '<button type="submit" class="btn btn-success">Adicionar ao carrinho</button>';
                                        } 
                                                ?>  
									</span>
                                </form>
							</div>
                        </span>
                    </section>
                </div>                

                <?php
                    }
                } 
                else {
                    echo "0 resultado";
                }
                mysqli_close($conn);
                ?>

            </div>
        </section>

        <?php include 'footer.php';?>

    </body>
</html>
    
    