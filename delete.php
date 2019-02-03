<?php
    //session_start();
    //if(!isset($_SESSION['email'])) {
    //    header('location: index-login.php');
    //}
?>

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
            <?php include 'navbar-adm.php'?>
        </header>

        <div class="container-fluid">
        <img src="imagens/tema-livraria-2600.jpg" alt="Livra" class="ml-0" width="100%">
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
                                
                                <img src="imagens/<?php echo $row['foto']; ?>" height="200"/>

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
                                
                                <form method="POST" action="delete_logica.php" class="text-center">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" class="btn btn-danger">EXCLUIR</button>
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

        <?php include'footer.php'?>

    </body>
</html>