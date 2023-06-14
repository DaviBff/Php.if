<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="alert.css">
  <link rel="stylesheet" href="php.css">
  <title>Document</title>
</head>
<body>
<div class="ripple-background">
        <div class="circle xxlarge shade1"></div>
        <div class="circle xlarge shade2"></div>
        <div class="circle large shade3"></div>
        <div class="circle medium shade4"></div>
        <div class="circle small shade5"></div>
      </div>
</body>
</html>

 <?php
    include_once "db.php";


      
    $email = $_POST['email'];
    $senha = $_POST['senha'];
       
    if (verificarCredenciais($email, $senha)){
      session_start();
      $_SESSION['email'] = $email;
      
      
      
  
      echo <<<HTML
      <script>
        setTimeout(() => {
          const divAlerta = document.createElement("div");
          divAlerta.className = "alerta";
          divAlerta.innerHTML = `<div class="bolinha"></div>
                                 <div class="texto">
                                   <h2>LOGIN EFETUADO</h2>
                                   <p>Bem-vindo, $email</p>
                                 </div>`;
          document.body.appendChild(divAlerta);
      
          setTimeout(() => {
          window.location.href = "home.php";
            }, 3000);
        }, 1000);
      </script>
      HTML;

      
     

    }else {
      header('Location:index.html');
    }
    ?>