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
		<div class="container mt-5">
			<div class="row"> 
            
		<div class="col-md-2"></div>

		<div class="col-md-8 bg-light p-3">	
			<div class="text-center mb-3"><h2>Registrar novo livro:</h2></div>
            
			
			<form method="post" action="insert.php">
					<div class="form-group">
						<span >
							<label for="titulo"> Título: </label>
						</span>
						<br />
                        <span>
							<input type="text" name="titulo" class="form-control" placeholder="Título do livro" required/>
						</span>	
					</div>
							<!-- facilitador: leva o cursor para o campo do id especificado-->
							<!--o campo id sempre tem que ser único, sem repetir em nenhum outro campo -->
					<div class="form-group">
						<span>					
							<label for="autor"> &nbsp;Autor:</label>
						<span>
						<br />
						<span>
							<input type="text" name="autor" class="form-control" placeholder="Nome do autor"/>
						</span>
					</div>
                            
                    <div class="form-group">
						<span>					
							<label for="ano">  &nbsp;Ano:</label>
						<span>
						<br />
						<span>
							<input type="text" name="ano" class="form-control" placeholder="Ano de publicação"/>
						</span>
					</div>
                            
                            
                     <div class="form-group">
						<span>					
							<label for="editora"> Editora:</label>
						<span>
						<br />
						<span>
							<input type="text" name="editora" class="form-control" placeholder="Nome da editora"/>
						</span>
					</div>
                            
                            
                    <div class="form-group">
						<span>					
							<label for="genero"> Gênero:</label>
						<span>
						<br />
						<span>
							<input type="text" name="genero" class="form-control" placeholder="Gênero literário"/>
						</span>
					</div>
                            
                    <div class="form-group">
						<span>					
							<label for="preco"> Preço R$</label>
						<span>
						<br />
						<span>
							<input type="text" name="preco" class="form-control" placeholder="Preço do livro"/>
						</span>
					</div>

                    <div class="form-group">
						<span>					
							<label for="foto"> Nome e extensão da foto:</label>
						<span>
						<br />
						<span>
							<input type="text" name="foto" class="form-control" placeholder="Ex: minhafoto.jpg"/>
						</span>
					</div> 
                            
                    <div class="form-group">
						<span>					
							<label for="descricao"> Descrição:</label>
						<span>
						<br />
						<span>
                            <textarea class="form-control" name="descricao" rows="5" placeholder="Descrição do livro"/></textarea>
							
						</span>
					</div>
                    <div class="form-group">
						<span>					
							<label for="estoque"> Estoque:</label>
						<span>
						<br />
						<span>
							<input type="text" name="estoque" class="form-control" placeholder="Quantidade no estoque"/>
						</span>
					</div>
                    <div class="form-group">
						<span>					
							<label for="isbn"> ISBN:</label>
						<span>
						<br />
						<span>
							<input type="text" name="isbn" class="form-control" placeholder="Insira o código ISBN do livro"/>
						</span>
					</div>
				
                    <div class="text-center">
					   <input type="submit" name="btnEnviar" value="CADASTRAR" class="btn btn-success" />
					   <input type="reset" name="btnLimpar" value="LIMPAR" class="btn btn-danger" />
				    </div>
                
			</form>
			</div>
			<div class="col-md-2"></div>
			</div>
		</div>
        <?php include 'footer.php'; ?>
</body>
</html>