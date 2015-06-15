<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Tesouro Fácil | Criar conta</title>
  <meta name="description" content="app, web app, responsive, responsive layout, admin, admin panel, admin dashboard, flat, flat ui, ui kit, AngularJS, ui route, charts, widgets, components" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <?php
    $this->load->view('includes/header.php');
  ?>

</head>
<body>
<div class="app">
  <div id="content" class="app-content" role="main">
    <div class="box">
      <div class="navbar md-whiteframe-z1 no-radius blue">

  <div class="navbar md-whiteframe-z1 no-radius blue">

      <a class="navbar-brand" href="/tesouro_facil">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve" style="
              width: 24px; height: 24px;">
            <path d="M 50 0 L 100 14 L 92 80 Z" fill="rgba(139, 195, 74, 0.5)"></path>
            <path d="M 92 80 L 50 0 L 50 100 Z" fill="rgba(139, 195, 74, 0.8)"></path>
            <path d="M 8 80 L 50 0 L 50 100 Z" fill="#f3f3f3"></path>
            <path d="M 50 0 L 8 80 L 0 14 Z" fill="rgba(220, 220, 220, 0.6)"></path>
          </svg>
        <img src="images/logo.png" alt="." style="max-height: 36px; display:none">
        <span class="hidden-folded m-l inline">Tesouro Fácil</span>
      </a>

  </div>

      </div>
      <div class="box-row">
        <div class="box-cell">
          <div class="box-inner padding">
            

<div class="padding-out">
  <div class="p-h-md p-v bg-white box-shadow pos-rlt">
    <h4 class="no-margin">Bem Vindo ao Tesouro Fácil</h4>
  </div>
  <div class="box">
    <div class="col-md-3">
      <div style="background:url(images/a1.jpg) center center; background-size:cover">
        <div class="p-lg bg-white-overlay text-center">
          <a href class="w-xs inline">
            
          </a>
          <div class="m-b m-t-sm h2">
            <span class="text-black">Olá Vistante</span>
          </div>
          <p>
            
          </p>
        </div>
      </div>
      <ul class="nav nav-lists b-t" ui-nav>
        <li class="active">
          <a href>Conta</a>
        </li>

      </ul>
    </div>
    <div class="col-md-9 b-l bg-white bg-auto">
      <div class="p-md bg-light lt b-b font-bold"></div>
      <form role="form" method="Post" action="insere_conta" class="p-md col-md-6" onsubmit="return validaCadastro()">
        <div class="form-group">
          <label>Foto para sua conta</label>
          <div class="form-file">
            <input type="file">
            <button class="btn btn-default">Upload</button>
          </div>
        </div>
        <div class="form-group">
          <label>Nome</label>
          <input type="text" id="Nome" name="Nome" class="form-control">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" id="Email" name="Email" class="form-control">
        </div>
        <div class="form-group">
          <label>Senha</label>
          <input type="password" id="Senha" name="Senha" class="form-control">
        </div>
        <div class="form-group">
          <label>Confirme a senha</label>
          <input type="password" id="ConfSenha" name="ConfSenha" class="form-control">
        </div>
        
        <button type="submit" class="btn btn-info m-t">Cadastrar</button>
        <?php
          if(isset($mensagem) and $mensagem <> "")
          {
          echo ("<p class='alert alert-info p-sm m-t-lg'>
                $mensagem
                </p>");
         }
          ?>
      </form>

    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
 <script type="text/javascript">

        function validaCadastro() {
            var nome = document.getElementById("Nome").value;
            var email = document.getElementById("Email").value;
            var senha = document.getElementById("Senha").value;
            var Confsenha = document.getElementById("ConfSenha").value;
  

            if(nome == null || nome == "")
            {
              alert("Informe um Nome.");
              return false;
            } 
            if(email == null || email == "")
            {
              alert("Informe um Email.");
              return false;
            }

            if (senha != Confsenha || senha =="" || Confsenha == "") {
                alert("Senhas informadas não são iguais.");
                return false;
            } 
              
             return true;
          };

  </script>

  <?php
    $this->load->view('includes/footer.php');
  ?>
</body>
</html>
