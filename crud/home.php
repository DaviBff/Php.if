<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="home.css">
    <title>Document</title>
</head>
<header>
      <menu>
        <ul>
            <li><a href="home.php">Home</a></li>
            
            <li><a href="sobre.php">Sobre</a></li>
            
            <li><a href="logoff.php">Logout</a></li>
            
        </ul>
    </menu>
</header>
<body>
   
  <div class="txt">
    <?php 
    session_start();
    if(!isset($_SESSION['email']))  {
        header('Location: login.php');
    }  
    echo "Bem Vindo, ".$_SESSION['email'];
    ?>
  </div>
     
</body>
</html>