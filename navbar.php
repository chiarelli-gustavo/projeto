      <nav class="navbar navbar-expand-xl navbar-dark bg-secondary">
        
        <a class="navbar-brand" href="index.php"><img src="imagens/livra_branco.png" style="height: 40px;"></a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
          
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre</a>
            </li>

            <li class="nav-item dropdown">

              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>

              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="categoria.php?genero=Administra&ccedil;&atilde;o">Administração</a>
                <a class="dropdown-item" href="categoria.php?genero=Autoajuda">Autoajuda</a>
                <a class="dropdown-item" href="categoria.php?genero=Ci&ecirc;ncias">Ciências</a>
                <a class="dropdown-item" href="categoria.php?genero=Fic&ccedil;&atilde;o Cient&iacute;fica">Ficção Ciêntífica</a>
                <a class="dropdown-item" href="categoria.php?genero=Filosofia">Filosofia</a>
                <a class="dropdown-item" href="categoria.php?genero=Hist&oacute;ria">História</a>
                <a class="dropdown-item" href="categoria.php?genero=Literatura Infantil">Literatura Infantil</a>
                <a class="dropdown-item" href="categoria.php?genero=N&atilde;o Fic&ccedil;&atilde;o">Não Ficção</a>
                <a class="dropdown-item" href="categoria.php?genero=Poesia">Poesia</a>
                <a class="dropdown-item" href="categoria.php?genero=Poesia &Eacute;pica">Poesia Épica</a>
                <a class="dropdown-item" href="categoria.php?genero=Psicologia">Psicologia</a>
                <a class="dropdown-item" href="categoria.php?genero=Romance">Romance</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>
          </ul>
          
                <button type="button" class="btn text-light btn-link" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Login</button>
                <span class="text-light">|</span>
                <button type="button" class="btn text-light btn-link" data-toggle="modal" data-target="#exampleModal2" data-whatever="@fat">Cadastre-se</button>              

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      
                      <div class="modal-body">
                        
                        <form  method="POST" action="select_logica_login_usuario.php">
                          <div class="form-group">
                            <label for="email-login" class="col-form-label">E-mail:</label>
                            <input type="text" class="form-control" placeholder="Digite seu e-mail de cadastro." id="email-login" name="email_login">
                          </div>
                          <div class="form-group">
                            <label for="senha-login" class="col-form-label">Senha:</label>
                            <input type="password" class="form-control" placeholder="Digite sua senha." id="senha-login" name="senha_login">
                          </div>
                            <div class="form-group">                            
                            <input type="hidden" name="nome_login">
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Entrar</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                          </div>
                        </form>

                      </div>                     

                    </div>
                  </div>
                </div>

                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cadastro</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      
                      <div class="modal-body">
                        
                        <form method="POST" action="insert_logica_cadastro_usuario.php">
                          <div class="form-group">
                            <label for="nome-cadastro" class="col-form-label">Nome completo:</label>
                            <input type="text" class="form-control" placeholder="Digite seu nome completo." id="nome-cadastro" name="nome_cadastro">
                          </div>
                          <div class="form-group">
                            <label for="email-cadastro" class="col-form-label">E-mail:</label>
                            <input type="text" class="form-control" placeholder="Digite seu e-mail." id="email-cadastro" name="email_cadastro">
                          </div>
                          <div class="form-group">
                            <label for="senha-cadastro" class="col-form-label">Senha:</label>
                            <input type="password" class="form-control" placeholder="Digite sua senha." id="senha-cadastro" name="senha_cadastro">
                          </div>

                          <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Cadastre-se</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                          </div>
                        </form>

                      </div>                     

                    </div>
                  </div>
                </div>

          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="O que você procura?" aria-label="Pesquisar">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Pesquisar</button>
          </form>

          <a href="carrinho.php">
            <span style="font-size: 2em; color: white;">
              <i class="fas fa-shopping-cart mr-xl-2 ml-xl-3 d-none d-xl-block"></i>
            </span>
          </a>

          <form action="" method="POST" class="d-xl-none">
            <button class="btn btn-outline-light my-2">Carrinho de Compras <span style="font-size: 1em; color: white;"><i class="fas fa-shopping-cart"></i>
          </span></button>
          </form>

        </div>

      </nav>
      

