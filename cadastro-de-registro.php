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
        <a class="navbar-brand text-light" href="gerenciador.php">Livraria Simples</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="select.php">Compre (mostrar Livros)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="cadastro-de-registro.php">Cadastrar Livros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="editar-estoque.php">Editar Estoque</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="apagar-estoque.php">Apagar do Estoque</a>
                    </li>
                    </ul>
            </div>
    </nav>
</header>

    <div class="container-fluid">
        <img src="imagens/tema-livraria-2600.jpg" alt="estante virtual cheia de livros" class="ml-0">
    </div>
		<div class="container mt-5">
            
		<div class="col-md-2"></div>
		<div class="col-md-8 bg-light p-3">	
			<div><h2>Inserir registro na livraria tabela livros</h2></div>
            
			
			<form method="post" action="insert.php">
					<div class="form-group">
						<span >
							<label for="titulo"> Titulo </label>
						</span>
						<br />
                        <span>
							<input type="text" name="titulo" class="form-control" placeholder="titulo" required/>
						</span>	
					</div>
							<!-- facilitador: leva o cursor para o campo do id especificado-->
							<!--o campo id sempre tem que ser único, sem repetir em nenhum outro campo -->
					<div class="form-group">
						<span>					
							<label for="autor"> &nbsp;Autor</label>
						<span>
						<br />
						<span>
							<input type="text" name="autor" class="form-control" placeholder="autor"/>
						</span>
					</div>
                            
                    <div class="form-group">
						<span>					
							<label for="ano">  &nbsp;Ano</label>
						<span>
						<br />
						<span>
							<input type="text" name="ano" class="form-control" placeholder="ano"/>
						</span>
					</div>
                            
                            
                     <div class="form-group">
						<span>					
							<label for="editora"> Editora</label>
						<span>
						<br />
						<span>
							<input type="text" name="editora" class="form-control" placeholder="editora"/>
						</span>
					</div>
                            
                            
                    <div class="form-group">
						<span>					
							<label for="genero"> Genero</label>
						<span>
						<br />
						<span>
							<input type="text" name="genero" class="form-control" placeholder="gênero"/>
						</span>
					</div>
                            
                    <div class="form-group">
						<span>					
							<label for="preco"> Preço R$</label>
						<span>
						<br />
						<span>
							<input type="text" name="preco" class="form-control" placeholder="preco"/>
						</span>
					</div>  
                    <div class="form-group">
						<span>					
							<label for="foto"> Nome e extensão da foto</label>
						<span>
						<br />
						<span>
							<input type="text" name="foto" class="form-control" placeholder="foto"/>
						</span>
					</div> 
				
                    <div>
					   <input type="submit" name="btnEnviar" value="Enviar" class="btn btn-primary" />
					   <input type="reset" name="btnLimpar" value="Limpar" class="btn bt-danger" />
				    </div>
                
			</form>
			</div>
			<div class="col-md-2"></div>
		</div>
</body>
</html>