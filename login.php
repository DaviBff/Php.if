


 <?php
    include_once "db.php";

    
    $email = $_POST['email'];
    $senha = $_POST['senha'];
       
    if (verificarCredenciais($email, $senha)){
      session_start();
      $_SESSION['email'] = $email;
      header('Location:home.php'); 
    }else {
      header('Location:index.html');
    }
    ?>