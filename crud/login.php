

<?php
$email = $_POST['email'];
$password = $_POST['password'];

if( $email == "Davi" && $password == "123456"){
    echo "Login Efetuado";
    session_start();
    $_SESSION['email'] = $email;
    echo "<script>setTimeout(
        function(){ window.location.href='home.php'});
          </script>";
} else {
    echo "Login ou Senha invalidos!";
}


?>