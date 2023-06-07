<?php

include_once "db.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];


if (conectaBD()) {

  echo insereUsuario($nome, $email, $senha);

  header('Location: index.html');
  
} else {
  echo "Erro ao conectar";
}



?>