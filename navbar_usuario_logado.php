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

          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="O que você procura?" aria-label="Pesquisar">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Pesquisar</button>
          </form>

          <ul class="navbar-nav ml-xl-2">
            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Minha Conta</a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="usuario_cadastrado.php">Meu Cadastro</a>
                  <a class="dropdown-item" href="usuario_meus_pedidos.php">Meus Pedidos</a>
                  <a class="dropdown-item" href="usuario_logout.php">Sair</a>                                
              </li>
            </ul>

          <a href="#">
            <span style="font-size: 2em; color: white;">
              <i class="fas fa-shopping-cart mr-xl-2 ml-xl-2 d-none d-xl-block"></i>
            </span>
          </a>

          <form action="" method="POST" class="d-xl-none">
            <button class="btn btn-outline-light my-2">Carrinho de Compras <span style="font-size: 1em; color: white;"><i class="fas fa-shopping-cart"></i>
          </span></button>
          </form>

        </div>

      </nav>