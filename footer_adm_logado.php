<div class="container-fluid bg_cinza">
  <div class="row bg_cinza">
    <div class="col-sm-4 mt-5 pad5 bg_cinza">
      <section>
        <strong>Livra</strong><br>
        <p>
          <a href="sobre.php" target="_self">Conheça um pouco melhor nossa postura e filosofia de trabalho, nossa missão e valores.</a><br>Visite também o nosso
          <a href="#" target="_blank">Instagram</a> e 
          <a href="#" target="_blank">Facebook.</a></p>
      </section>
    </div>

    <div class="col-sm-4 bg_cinza"></div>
    <div class="col-sm-4 mt-5 text-right pad5 bg_cinza">
      <adress>
        <b>Entre em contato</b><br>
        SAC: (21) 2222-5000 <br>
        Vendas: (21) 2222-5099 <br>
        Administrativo: (21) 2222-5090<br>
        <a href="mailto:contato@livra.com.br" target="_blank">E-mail: contato@livra.com.br</a><br>
      </adress>

      <section class="pad5 bg_cinza"> 
        <a href="https://www.instagram.com" target="_blank">
          <img src="imagens/icone-instagram-branco.png" width="15%" alt="icone-instagram" title="livra no instagram">
        </a>
        <a href="https://www.facebook.com" target="_blank">
          <img src="imagens/icone-facebook-branco.png" width="15%" alt="icone-instagram" title="livra no facebook">
        </a>
      </section>

      <!-- Modal Login Administrador-->
      <!-- 
      <button type="button" class="btn text-primary btn-link" data-toggle="modal" data-target="#exampleModal3" data-whatever="@mdo">Login Administrador</button> -->

      <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Login de Gerenciamento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
              <form  method="POST" action="select_logica_login_administrador.php">
                <div class="form-group text-left">
                  <label for="email-login-adm" class="col-form-label ">E-mail:</label>
                  <input type="text" class="form-control" placeholder="Digite seu e-mail de administrador." id="email-login-adm" name="email_login_adm">
                </div>

                <div class="form-group  text-left">
                  <label for="senha-login-adm" class="col-form-label">Senha:</label>
                  <input type="password" class="form-control" placeholder="Digite sua senha." id="senha-login-adm" name="senha_login_adm">
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
      <small>
        <p><strong>Livra &copy;</strong></p>
      </small>
    </div>      
  </div> 
</div>
