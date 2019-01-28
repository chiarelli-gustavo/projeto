

      <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        
        <a class="navbar-brand" href="index.php"><img src="imagens/livra_branco.png" style="height: 40px;"></a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
          
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre</a>
            </li>

            <li class="nav-item dropdown">

              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>

              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="categoria.php?genero=administracao">Administração</a>
                <a class="dropdown-item" href="categoria.php?genero=autoajuda">Autoajuda</a>
                <a class="dropdown-item" href="categoria.php?genero=ciencias">Ciências</a>
                <a class="dropdown-item" href="categoria.php?genero=ficcaocientifica">Ficção Ciêntífica</a>
                <a class="dropdown-item" href="categoria.php?genero=filosofia">Filosofia</a>
                <a class="dropdown-item" href="categoria.php?genero=historia">História</a>
                <a class="dropdown-item" href="categoria.php?genero=infantil">Literatura Infantil</a>
                <a class="dropdown-item" href="categoria.php?genero=naoficcao">Não Ficção</a>                
                <a class="dropdown-item" href="categoria.php?genero=poesia">Poesia</a>
                <a class="dropdown-item" href="categoria.php?genero=poesiaepica">Poesia Épica</a>                              
                <a class="dropdown-item" href="categoria.php?genero=psicologia">Psicologia</a>
                <a class="dropdown-item" href="categoria.php?genero=romance">Romance</a>                
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
                        
                        <form>
                          <div class="form-group">
                            <label for="email_login" class="col-form-label">E-mail:</label>
                            <input type="text" class="form-control" placeholder="Digite seu e-mail de cadastro." id="email_login">
                          </div>
                          <div class="form-group">
                            <label for="senha_login" class="col-form-label">Senha:</label>
                            <input type="text" class="form-control" placeholder="Digite sua senha." id="senha_login">
                          </div>

                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary">Entrar</button>
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
                        
                        <form>
                          <div class="form-group">
                            <label for="nome_cadastro" class="col-form-label">Nome completo:</label>
                            <input type="text" class="form-control" placeholder="Digite seu nome completo." id="nome_cadastro">
                          </div>
                          <div class="form-group">
                            <label for="email_cadastro" class="col-form-label">E-mail:</label>
                            <input type="text" class="form-control" placeholder="Digite seu e-mail." id="email_cadastro">
                          </div>
                          <div class="form-group">
                            <label for="senha_cadastro" class="col-form-label">Senha:</label>
                            <input type="text" class="form-control" placeholder="Digite sua senha." id="senha_cadastro">
                          </div>

                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary">Cadastre-se</button>
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
        </div>

      </nav>
      

