<!DOCTYPE html>
<html>
    <head>
        <meta lang="PT-BR">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="estilo.css">
    </head>

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

                <?php

                $codProduto = $_GET['id'];
                require_once 'conexao.php';
                $sql = "SELECT * FROM livros WHERE id={$codProduto};";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                ?>

                    <div class="col-md-4 mt-5 align-self-xl-stretch">

                        <section class="list-group align-self-xl-strech min-height">

                            <span class="list-group-item list-group-item-secondary text-center">
                                
                                <img class="mt-2 mb-2" src="imagens/<?php echo $row['foto']; ?>" height="230"/>                   

                            </span>

                        </section>
                    </div>

                    <div class="col-md-8 mt-5 align-self-xl-stretch">
                        <h3 class=""><?php echo $row['titulo']; ?></h3>
                        
                        <span class="list-group-item">

                            <span><h6 class="d-inline">Autor: </h6><?php echo $row['autor']; ?></span><br>
                            
                            <span><h6 class="d-inline">Editora: </h6><?php echo $row['editora']; ?></span><br>

                            <span><h6 class="d-inline">Ano: </h6><?php echo $row['ano']; ?></span><br>

                            <span><h6 class="d-inline">Gênero: </h6><?php echo $row['genero']; ?></span><br>

                            <span><h6 class="d-inline">ISBN: </h6><?php echo $row['isbn']; ?></span>

                            <hr>

                            <span style="width: 90%, height: 1px, background-color: #ddd;"></span>

                            <div class="clearfix text-center">

                                <span class="float-left col-md-3 col-lg-2 mb-2 mb-md-0">
                                    <h6 class="d-inline">Preço: </h6><h4 class="d-inline">R$<?php echo number_format($row['preco'], 2, ',', '.'); ?></h4>
                                </span> 

                                <form method="GET" class="float-right col-md-3 col-lg-4" action="checkout.php?<?php echo $row['id']; ?>">
                                    <span>                                        
                                        <?php
                                            if ($row['estoque']==0){
                                                echo '<button type="submit" class="btn btn-warning text-black-50 m-2 m-md-0 px-5 px-md-3 px-lg-5 d-none" disabled><strong>Comprar</strong></button>';
                                            }else{
                                                echo '<button type="submit" class="btn btn-warning text-black-50 m-2 m-md-0 px-5 px-md-3 px-lg-5"><strong>Comprar</strong></button>';
                                                } 
                                        ?>
                                    </span>
                                </form>

                                <form method="POST" class="float-left col-md-6 col-lg-6" action="adicionar_produto_ao_carrinho.php?<?php echo $row['id']; ?>">
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
                                    <span>
                                        <?php
                                            if ($row['estoque']==0){
                                                echo '<button type="submit" class="btn btn-danger px-5 m-2 m-md-0" disabled>Produto Indisponível</button>';
                                            }else{
                                                echo '<button type="submit" class="btn btn-success m-2 m-md-0">Adicionar ao Carrinho</button>';
                                                } 
                                        ?>
                                    </span>
                                </form>
                            </div>
                        </span>
                    </div>

                    <div class="mt-3 list-group-item">

                        <span>
                            <h5>Descrição:</h5>
                            <hr>
                            <p><?php echo $row['descricao']; ?></p>
                        </span>

                    </div>

                    <br><br><br>

                <?php
                    }
                } 
                else {
                    echo "Este livro não foi encontrado no Banco de Dados.";
                }
                mysqli_close($conn);

                ?>        
            </div>
        </section>
    </body>

</html>