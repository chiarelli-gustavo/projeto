<?php
   // session_start();
    //if(!isset($_SESSION['email'])) {
   // header('location: index-login.php');
   // }
?>

<!doctype html>
<html>
    <head>
        <meta lang="pt-br">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, inicial-scale=1">
    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="estilo.css">
    </head>
<body>
    
        <header class="container_fluid">
            <?php include 'navbar.php'?>
        </header>
<div class="container-fluid">
        <img src="imagens/tema-livraria-2600.jpg" width="100%" alt="estante virtual cheia de livros" class="ml-0">
</div>

    <section class="container">
        <div class="row">  <!--  classe para separar em coluna engloba todo o php-->
                    <?php
                    $id = $_GET['id'];
                    //Ele 'chama' o arquivo conexao

                    require_once 'conexao.php';
                  
                        
                        //Passo o comando que quero fazer no banco para variavel $sql

                    $sql = "SELECT * FROM livros WHERE id={$id}";

                        // pega o $sql e executa a consulta o comando $sql na conexão $conn (consulta)
                    $result = mysqli_query($conn, $sql);   // dados ainda em formato de máquina e não consegue  

                    //verifica se tem registros no resultado 
                    if (mysqli_num_rows($result) > 0) {

                        //executa enquanto houver registros no resultado  - pega os resultados que estão em formato de máquina e codifica para um formato 'humano'
                        while ($row = mysqli_fetch_assoc($result)) {

                    ?>
                            <!-- substituir o código abaixo que é só php por html com php para melhor formatação  
                                echo "id: " . $row["id"]."<br/>".
                                " Titulo: " . $row["titulo"]. "<br/>".
                                " Ano: " . $row["ano"]. "<br/>".
                                " Editora: " . $row["editora"]. "<br/>".
                                " Genero: " . $row["genero"]. "<br/>".
                                " Preço: " . $row["preco"]. "<br/>";  -->
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mt-5 align-self-xl-stretch">
                        <section class="list-group align-self-xl-strech min-height">
                                  <span class="card-img text-center"><img src="imagens/<?php echo $row['foto']; ?>" width="50%" class="ml-0" />      
                            </span>
                        </section>
                    </div>
                    <div class="col-md-6 mt-5 align-self-xl-stretch">
                       <span class="list-group-item">
                            <span>
                                <span class="font-weight-light">título</span>
                                    <h3 class="card-title"><?php echo $row['titulo']; ?></h3>
                                <span class="font-weight-light">autor</span>
                                    <h4><?php echo $row['autor']; ?></h4><br/>
                            </span>
                                    <span class="font-weight-light">editora/ano</span><br/>
                                    <span><h4><?php echo $row['editora']; ?> / <?php echo $row['ano']; ?></h4></span> 
                              <hr>
                                        <span class="mt-2"><h3>R$<?php echo $row['preco']; ?></h3>
                                        </span> <br/>
                              <form method="get" action="adicionar-carrinho.php?<?php echo $row['id']; ?>">
                                    <span class="mt-3"><button type="submit" class="btn btn-success">adicione ao carrinho</button>
                                    </span>
                              </form>
                        </span>
                    </div>
                </div>
            </div> 
                
                    <div class="col-md-12 mt-5 align-self-xl-stretch">
                        <span>
                            <h3>Descrição</h3>
                            <p><?php echo $row['descricao']; ?></p>
                        </span>
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
    <?php include 'footer.php'?>
    </body>
</html>
    
    