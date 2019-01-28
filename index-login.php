<!doctype html>
<html>
	<head>
	<meta lang="pt-br">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body>
	
    <header class="container_fluid">
            <?php include 'navbar.php'?>
    </header>

    <div class="container-fluid">
        <img src="imagens/tema-livraria-2600.jpg" alt="estante virtual cheia de livros" class="ml-0">
    </div>
		<div class="container mt-5">
             
           <div class="row">            
             <!-- Formulario login ::::::::::::::::::::::::::::::::::::::::::::::::::: -->    

                <div class="col-md-5 bg-light p-3">	
                    <div><h2>Faça o seu login</h2></div>


                    <form method="post" action="logica-login.php">
                            <div class="form-group">
                                <span >
                                    <label for="email"> Email </label>
                                </span>
                                <br />
                                <span>
                                    <input type="text" name="email" id="email" class="form-control" placeholder="email para login" required/>
                                </span>	
                            </div>
                                    <!-- facilitador: leva o cursor para o campo do id especificado-->
                                    <!--o campo id sempre tem que ser único, sem repetir em nenhum outro campo -->
                            <div class="form-group">
                                <span>					
                                    <label for="senha">Senha</label>
                                <span>
                                <br />
                                <span>
                                    <input type="password" name="senha" id="senha" class="form-control" placeholder="senha"/>
                                </span>
                            </div>

                            <div>
                               <input type="submit" name="btnEnviar" value="Entrar" class="btn btn-primary" />
                            </div>

                    </form>
                    </div>


                        <div class="col-md-1" style="border-right: solid 1px black"></div>
                        <div class="col-md-1"></div>

                <!-- Formulario cadastro ::::::::::::::::::::::::::::::::::::::::::::::::::: -->    

                    <div class="col-md-5 bg-light p-3">	
                        <div><h2>Não é usurário? <br/>
                            Faça seu cadastro! </h2></div>


                        <form method="post" action="insert-cadastro.php">

                        <div class="form-group">
                                    <span >
                                        <label for="nome"> Nome </label>
                                    </span>
                                    <br />
                                    <span>
                                        <input type="text" name="nome" id="nome" class="form-control" placeholder="nome" required/>
                                    </span>	
                                </div>
                                <div class="form-group">
                                    <span >
                                        <label for="email"> Email </label>
                                    </span>
                                    <br />
                                    <span>
                                        <input type="text" name="email" id="email" class="form-control" placeholder="email para login" required/>
                                    </span>	
                                </div>
                                        <!-- facilitador: leva o cursor para o campo do id especificado-->
                                        <!--o campo id sempre tem que ser único, sem repetir em nenhum outro campo -->
                                <div class="form-group">
                                    <span>					
                                        <label for="senha">Senha</label>
                                    <span>
                                    <br />
                                    <span>
                                        <input type="password" name="senha" id="senha" class="form-control" placeholder="senha"/>
                                    </span>
                                </div>

                                <div>
                                   <input type="submit" name="btnEnviar" value="Entrar" class="btn btn-primary" />
                                </div>

                        </form>
                    </div>
                </div> 
		</div>
</body>
</html>