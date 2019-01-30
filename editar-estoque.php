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
        <link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body>
        <header class="container_fluid">
            <?php include 'navbar-adm.php'?>
        </header>
                    
    <div class="container-fluid">
        <img src="imagens/tema-livraria-2600.jpg" width="100%" alt="estante virtual cheia de livros" class="ml-0">
    </div>
    
    <div><h2>Atualizar registros na livraria tabela livros</h2></div>
        
        <div class="container mt-5">
            <div class="row">  <!--  classe para separar em coluna engloba todo o php-->
                    <?php

                    //Ele 'chama' o arquivo conexao

                    require_once 'conexao.php';

                    //Passo o comando que quero fazer no banco para variavel $sql

                    $sql = "SELECT id, titulo, autor, ano, editora, genero, preco, foto FROM livros";

                    // pega o $sql e executa a consulta o comando $sql na conexão $conn (consulta)
                    $result = mysqli_query($conn, $sql);   // dados ainda em formato de máquina e não consegue  

                    //verifica se tem registros no resultado 
                    if (mysqli_num_rows($result) > 0) {

                        //executa enquanto houver registros no resultado  - pega os resultados que estão em formato de máquina e codifica para um formato 'humano'
                        while($row = mysqli_fetch_assoc($result)) {

                    ?>
                    
                        <div class="col col-md-4 mt-4 align-self-xl-stretch p-7">  
		
                                    <form method="post" action="update.php">

                                        <div class="form-group">
                                                <span>
                                                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>" class="form-control" />
                                                </span>	
                                            </div>

                                    

                                            <div class="form-group">
                                                <span >
                                                    <label for="titulo"> Titulo </label>
                                                </span>
                                                <br />
                                                <span>
                                                    <input type="text" class="form-control h2" value="<?php echo $row['titulo']; ?>" disabled />
                                                </span>	
                                            </div>
                                    
                                            <div class="form-group">
                                                <span>					
                                                    <label for="autor"> Autor</label>
                                                </span>
                                                <br />
                                                <span>
                                                    <input type="text" name="autor" class="form-control" value="<?php echo $row['autor']; ?>"/>
                                                </span>
                                            </div>

                                            <div class="form-group">
                                                <span>					
                                                    <label for="ano"> Ano</label>
                                                </span>
                                                <br />
                                                <span>
                                                    <input type="text" name="ano" class="form-control" value="<?php echo $row['ano']; ?>"/>
                                                </span>
                                            </div>


                                             <div class="form-group">
                                                <span>					
                                                    <label for="editora"> Editora</label>
                                                 </span>
                                                <br />
                                                <span>
                                                    <input type="text" name="editora" class="form-control" value="<?php echo $row['editora']; ?>"/>
                                                </span>
                                            </div>


                                            <div class="form-group">
                                                <span>					
                                                    <label for="genero"> Genero</label>
                                                </span>
                                                <br />
                                                <span>
                                                    <input type="text" name="genero" class="form-control" value="<?php echo $row['genero']; ?>"/>
                                                </span>
                                            </div>

                                       

                                            <div class="form-group">
                                                <span>					
                                                    <label for="preco"> Preço R$</label>
                                                </span>
                                                <span>
                                                    <input type="text" name="preco" class="form-control" value=" <?php echo $row['preco'] ?> "/>
                                                </span>

                                            </div>  
                                            <div class="form-group">
                                                <span>					
                                                    <label for="desconto"> Desconto</label>
                                                </span>
                                                <br />
                                                <span>
                                                    <input type="number" name="desconto" class="form-control" value="<?php echo $row['desconto']; ?>"/>
                                                </span>
                                            </div>        
                                            <div class="form-group">
                                                <span>					
                                                    <label for="foto"> Nome e extensão da foto</label>
                                                </span>
                                                <br />
                                                <span>
                                                    <input type="text" name="foto" class="form-control" value="<?php echo $row['foto']; ?>"/>
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <span>					
                                                    <label for="estoque"> Estoque</label>
                                                </span>
                                                <br />
                                                <span>
                                                    <input type="text" name="estoque" class="form-control" placeholder="quantidade no estoque"/>
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <span>					
                                                    <label for="isbn"> ISBN</label>

                                                </span>
                                                <br />
                                                <span>
                                                    <input type="text" name="isbn" class="form-control" placeholder="isbn"/>
                                                </span>
                                            </div>
                                     
                      
                                            <div>
                                               <input type="submit" name="btnEnviar" value="Alterar" class="btn btn-primary mt-3" />
                                            </div>
                                    </form>
                                </div>        
                        
               
                          <?php 
                                        }
                                }
                            else {
                                echo "0 resultado";
                                }
                            mysqli_close ($conn);
                        ?>
            
		      </div>
        </div>
             
</body>
</html>