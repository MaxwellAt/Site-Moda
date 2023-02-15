<html>
  <head>
    <title>PHP Test</title>
    <link rel="icon" href="login/logo-removebg-preview.png" />
    <link rel="stylesheet" href="style_one.css">
    <style>
      input[type="submit"]{
        margin-top: 30px;
      }
      #mensagem{
        width: 50%;
      }
      span{
        padding: 6px 20px;
        border-radius: 10px;
    }
      .erro{
          background-color: #ffecec;
          border: 1px solid #f5aca6;
      }
      .sucesso {
          background-color: #e9ffd9;
          border: 1px solid #a6ca8a;
      }
      .aviso {
          background-color: #fff8c4;
          border: 1px solid #f2c779;
      }
    </style>
  </head>
  <body>
    <form method="post" action="/Xamp/cadastra_usuario_insert.php">
        <h3>Registrar-se</h3>
        <label>Nome</label>
        <input type="text" name='nome_cad'>
        <label>Senha</label>
        <input type="password" name="email_cad">
        <label>Repita a senha</label>
        <input type="password" name="senha_cad">
        <input type="submit">
    </form>
  </body>
</html>

<?php
  if($_POST) {
      $senha = $_POST['senha'];
      $senhaConfirma  = $_POST['senha_confirma'];
      if ($senha == "") {
          $mensagem = "<span class='aviso'><b>Aviso</b>: O campo de senha precisa ser preenchido!</span>";
      } else if ($senha == $senhaConfirma) {
          $mensagem = "<span class='sucesso'><b>Sucesso</b>: As senhas são iguais: ".$senha."</span>";

        
          echo "<script type='text/javascript' defer>location = 'login.php'</script>";
      } else {
          $mensagem = "<span class='erro'><b>Erro</b>: As senhas não conferem!</span>";
      }
      echo "<p id='mensagem'>".$mensagem."</p>";
  }
?>