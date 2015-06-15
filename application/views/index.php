<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Tesouro Fácil | Login </title>
  <meta name="description" content="app, web app, responsive, responsive layout, admin, admin panel, admin dashboard, flat, flat ui, ui kit, AngularJS, ui route, charts, widgets, components" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <?php
    $this->load->view('includes/header.php');
  ?>

</head>
<body>
<div class="app">

  <div class="center-block w-xxl w-auto-xs p-v-md">
    <div class="navbar">
      <div class="navbar-brand m-t-lg text-center">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve" style="
                width: 24px; height: 24px;">
          <path d="M 50 0 L 100 14 L 92 80 Z" fill="rgba(139, 195, 74, 0.5)"></path>
          <path d="M 92 80 L 50 0 L 50 100 Z" fill="rgba(139, 195, 74, 0.8)"></path>
          <path d="M 8 80 L 50 0 L 50 100 Z" fill="#fff"></path>
          <path d="M 50 0 L 8 80 L 0 14 Z" fill="rgba(255, 255, 255, 0.6)"></path>
        </svg>
        <span class="m-l inline">Tesouro Fácil</span>
      </div>
    </div>

    <div class="p-lg panel md-whiteframe-z1 text-color m">
      <div class="m-b text-sm">
        Informe seus dados de login
      </div>
      <form name="form" method="Post" action="Verifica/verifica_usuario">
        <div class="md-form-group ">
          <input type="email" name="Email" class="md-input" ng-model="user.email" required>
          <label>Email</label>
        </div>
        <div class="md-form-group ">
          <input type="password" name="Senha" class="md-input" ng-model="user.password" required>
          <label>Senha</label>
        </div>      
        <div class="m-b-md">        
        </div>
        <button md-ink-ripple type="submit" class="md-btn md-raised pink btn-block p-h-md">Entrar</button>
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

    <div class="p-v-lg text-center">
      <div class="m-b"><button ui-sref="access.forgot-password" class="md-btn">Esqueceu sua senha?</button></div>
      <div>Não possui cadastro? <button ui-sref="access.signup" class="md-btn" onclick="window.location.href='Cadastro/cria_conta'">Crie uma conta</button></div>
    </div>
  </div>



</div>

<?php 
      $this->load->view('includes/footer.php');  
?>
</body>
</html>
