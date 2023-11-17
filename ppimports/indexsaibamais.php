
<?php

    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Sexo: ' . $_POST['genero']);
        // print_r('<br>');
        // print_r('Data de nascimento: ' . $_POST['data_nascimento']);
        // print_r('<br>');
        // print_r('Cidade: ' . $_POST['cidade']);
        // print_r('<br>');
        // print_r('Estado: ' . $_POST['estado']);
        // print_r('<br>');
        // print_r('Endereço: ' . $_POST['endereco']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        

        $result = mysqli_query($conexao, "INSERT INTO clientes(nome,senha,email) 
        VALUES ('$nome','$senha','$email')");

        header('Location: login.php');
    }

?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link rel="stylesheet" href="stylesaibamais.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
  
  <div class="box">
        
    <div class="container">
      <div class="content first-content">
        <div class="first-column">
          <h2 class="title title-primary">Seja Bem-vindo!</h2>
          <p class="description description-primary">Faça seu login</p>
          <p class="description description-primary">Para se manter conectado conosco</p>
          <button id="signin" class="btn btn-primary">Sign In</button>
        </div>
        <div class="second-column">
          <h2 class="title title-second">Crie sua conta</h2>
          <div class="social-media">
            <ul class="list-social-media">
              <a class="link-social-media" href="#">
                <li class="item-social-media">
                  <i class="fab fa-facebook-f"></i>
                </li>
              </a>
              <a class="link-social-media" href="#">
                <li class="item-social-media">
                  <i class="fab fa-google-plus-g"></i>
                </li>
              </a>
              <a class="link-social-media" href="#">
                <li class="item-social-media">
                  <i class="fab fa-linkedin-in"></i>
                </li>
              </a>
            </ul>
          </div><p class="description description-second">ou use sua conta de e-mail:</p>
          <form class="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label class="label-input" for="">
              <i class="far fa-user icon-modify"></i>
              <input type="text" placeholder="Nome" name="name" required>
            </label>
            <label class="label-input" for="">
              <i class="far fa-envelope icon-modify"></i>
              <input type="email" placeholder="Email" name="email" required>
            </label>
            <label class="label-input" for="">
              <i class="fas fa-lock icon-modify"></i>
              <input type="password" placeholder="Senha" name="password" required>
            </label>
            <button class="btn btn-second">Sign Up
                </form>
            </div><!-- second column -->
        </div><!-- first content -->
        <div class="content second-content">
            <div class="first-column">
                <h2 class="title title-primary">ola, amigo(a)!</h2>
                <p class="description description-primary">insira seus dados</p>
                <p class="description description-primary">e comece a jornada conosco</p>
                <button id="signup" class="btn btn-primary">sign up</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">Faça login</h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div><!-- social media -->
                <p class="description description-second">ou use sua conta de e-mail:</p>
                <form class="form">
                
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" placeholder="Email">
                    </label>
                
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" placeholder="Senha">
                    </label>
                
                    <a class="password" href="#">Esqueceu sua senha?</a>
                    <button class="btn btn-second">sign in</button>
                </form>
            </div><!-- second column -->
        </div><!-- second-content -->
    </div>
    <script src="js/app.js"></script>
</body>
</html>