<?php
    // session_start();
    //  if(!isset($_SESSION['email'])) {
    //     header('location: index-login.php');
    //}
?>  

<!doctype html>
<html>
    <?php include 'head.php'?>
<body>
    
        <header class="container_fluid">
            <?php include 'navbar.php'?>
        </header>
<div class="container-fluid">
        <img src="imagens/tema-livraria-2600.jpg" alt="estante virtual cheia de livros" class="ml-0">
        <div style="text-align:right"><?php include 'data.php'?></div>
</div>

    <section class="container">
        <div class="row">  <!--  classe para separar em coluna engloba todo o php-->
                    <?php

                    //Ele 'chama' o arquivo conexao

                    require_once 'conexao.php';

                    //Passo o comando que quero fazer no banco para variavel $sql

                    $sql = "SELECT * FROM livros";

                    // pega o $sql e executa a consulta o comando $sql na conexão $conn (consulta)
                    $result = mysqli_query($conn, $sql);   // dados ainda em formato de máquina e não consegue  

                    //verifica se tem registros no resultado 
                    if (mysqli_num_rows($result) > 0) {

                        //executa enquanto houver registros no resultado  - pega os resultados que estão em formato de máquina e codifica para um formato 'humano'
                        while($row = mysqli_fetch_assoc($result)) {

                    ?>
                            <!-- substituir o código abaixo que é só php por html com php para melhor formatação  
                                echo "id: " . $row["id"]."<br/>".
                                " Titulo: " . $row["titulo"]. "<br/>".
                                " Ano: " . $row["ano"]. "<br/>".
                                " Editora: " . $row["editora"]. "<br/>".
                                " Genero: " . $row["genero"]. "<br/>".
                                " Preço: " . $row["preco"]. "<br/>";  -->

                    <div class="col-lg-3 col-md-4 col-sm-6 mt-5 align-self-xl-stretch">
                       
                        <section class="list-group align-self-xl-strech min-height">
                            <a href=produto.php?id=<?php echo $row['id']; ?>><span class="list-group-item list-group-item-secondary text-center"><img src="imagens/<?php echo $row['foto']; ?>" class="text-center" height="240px"/>
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
                                            echo '<button type="submit" class="btn btn-danger" disabled>Indisponível!</button>';
                                            }else{
                                            echo '<button type="submit" class="btn btn-success">adicione ao carrinho!</button>';
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
                    mysqli_close($conn);  // sempre fechar a conexão para otimizar a performance do banco. Cada banco tem um total de 30 mil conexões.

                    ?>
            </div>
        </section>
    </body>
</html>
    
    