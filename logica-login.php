<?php

//sempre que eu quiser utilizar uma sessão, preciso que ela seja iniciada

session_start();

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = sha1($_POST['senha']);
//sha1 criptografa o bloco inteiro correspondente a senha criada - não dá para descriptografar

                    //Ele 'chama' o arquivo conexao

                    require_once 'conexao.php';

                    //Passo o comando que quero fazer no banco para variavel $sql

                    $sql = "SELECT id, nome FROM  usuarios where email='$email' AND senha = '$senha' LIMIT 1";

                    // pega o $sql e executa a consulta o comando $sql na conexão $conn (consulta)
                    $result = mysqli_query($conn, $sql);   // dados ainda em formato de máquina e não consegue  

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
        <link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body>
	
	<header class="container_fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand text-light" href="#">Livra ADM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="#">Compre (mostrar Livros)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Cadastrar Livros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Editar Estoque</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Apagar do Estoque</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="index-login.php">login</a>
                    </li>    
                    </ul>
            </div>
    </nav>
</header>

    <div class="container-fluid">
        <img src="imagens/tema-livraria-2600.jpg" width="100%" alt="estante virtual cheia de livros" class="ml-0">
    </div>
		<div class="container mt-5">
            
		<div class="col-md-2"></div>
		<div class="col-md-8 bg-light p-3">	
			<div><h2>
                
                <?php
                
                //verifica se tem registros no resultado 
                    if (mysqli_num_rows($result) > 0) {
                        
                        $_SESSION['email']=$email;
                
                        header('location: select.php');  //header é comando para direcionar para uma página
                         
                    } 
                    else {
                        echo "Erro no login, tente novamente!";
                    }
                
                
                    mysqli_close($conn);  // sempre fechar a conexão para otimizar a performance do banco. Cada banco tem um total de 30 mil conexões.

                
                ?>
                
                </h2></div>
            
			
			<form method="post" action="index-login.php">
				
                   
                    <div>
					   <input type="submit" name="btnEnviar" value="Voltar" class="btn btn-primary" />
				    </div>
                
			</form>
			</div>

            
		
            
			<div class="col-md-2"></div>
		</div>
</body>
</html>
    
    