<?php
require_once 'conexao.php';
?>


<!doctype html>
<html>
	<head>
	<?php include'head.php' ?>
	</head>
	<body>
	
	<header class="container_fluid">
        <?php
        session_start();
            if(!isset($_SESSION['email'])) {
                include ('navbar.php');
                
                }else {
                    include ('navbar_usuario_logado.php');                
               }
        
        $nome = $_SESSION['nome'];              
        $email = $_SESSION['email'];        
        
        
        ?>
    </header>

    <div class="container-fluid">
        <img src="imagens/tema-livraria-2600.jpg" width="100%" alt="estante virtual cheia de livros" class="ml-0">
        <div style="text-align:right" class="text-align-right p-2 font-weight-light">Data: <?php include 'data.php'?></div>
        </div>
		<div class="container mt-5">
            
		<div class="col-md-2"></div>
        <div class="col-md-8">
            <div><h3>Informações pessoais</h3></div>
			<form method="post" action="update-meu-cadastro.php">
					<div class="form-group">
						<span >
							<label for="nome">nome</label>
						</span>
						<br />
                        <span>
							<input type="text" name="nome" class="form-control" placeholder="<?php echo $nome ?>"/>
						</span>	
					</div>
						
					<div class="form-group">
						<span>					
							<label for="email">email</label>
                        </span>
						<br />
						<span>
							<input type="text" name="email" class="form-control" placeholder="<?php echo $email ?>"/>
						</span>
					</div>
                            
                    <div class="form-group">
						<span>					
							<label for="celular">telefone (preferência para celular)</label>
                        </span>
						<br />
						<span>
							<input type="text" name="celular" class="form-control" placeholder="(cod)+ telefone" required/>
						</span>
					</div>
                            
                            
                     <div class="form-group">
						<span>					
							<label for="cpf">CPF</label>
                         </span>
						<br />
						<span>
							<input type="text" name="cpf" id="cpf" class="form-control" placeholder="cpf" required/>
						</span>
					</div>
                            
                            
                    <div class="form-group">
						<span>					
							<label for="dataNascimento">data de nascimento</label>
                        </span>
						<br />
						<span>
							<input type="text" name="dataNascimento" class="form-control" placeholder="(____)ano (__)mês (__) dia"/>
						</span>
					</div>
                    <div class="form-group">
						<span>					
							<label for="cep">CEP</label>
                        </span>
						<br />
						<span>
							<input type="text" name="cep" class="form-control" placeholder="cep"/>
						</span>
					</div>  
                    <div class="form-group">
						<span>					
							<label for="rua">Logradouro</label>
                        </span>
						<br />
						<span>
							<input type="text" name="rua" class="form-control" placeholder="Av, rua, etc ... "/>
						</span>
					</div> 
                            
                    <div class="form-group">
						<span>					
							<label for="numero">numero</label>
                        </span>
						<br />
						<span>
                            <textarea class="form-control" name="numero" rows="5" placeholder="numero"></textarea>
							
						</span>
					</div>
                    <div class="form-group">
						<span>					
							<label for="complemento">Complemento</label>
                        </span>
						<br />
						<span>
							<input type="text" name="complemento" class="form-control" placeholder="complemento"/>
						</span>
					</div>
                    <div class="form-group">
						<span>					
							<label for="cidade">cidade</label>
                        </span>
						<br />
						<span>
							<input type="text" name="cidade" class="form-control" placeholder="cidade"/>
						</span>
					</div>
                <div class="form-group">
						<span>					
							<label for="estado">estado</label>
                        </span>
						<br />
						<span>
							<input type="text" name="estado" class="form-control" placeholder="estado"/>
						</span>
					</div>
				<h3>Informações para compra: cadastro de cartão</h3>
                
                <div class="form-group">
						<span>					
							<label for="nomeCartao">nome igual ao do cartão </label>
                        </span>
						<br />
						<span>
							<input type="text" name="nomeCartao" class="form-control" placeholder="nome igual ao do cartao"/>
						</span>
					</div>
                <div class="form-group">
						<span>					
							<label for="validadeCartao">nome igual ao do cartão </label>
                        </span>
						<br />
						<span>
							<input type="text" name="validadeCartao" class="form-control" placeholder="validade"/>
						</span>
					</div>
                
                <div class="form-group">
						<span>					
							<label for="codigoCartao">código de validação</label>
                        </span>
						<br />
						<span>
							<input type="senha" name="codigoCartao" class="form-control" placeholder="código"/>
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

            
		
            
			<div class="col-md-2"></div>
		</div>
</body>
</html>