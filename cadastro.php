<?php

include_once "db.php";
session_start();
$nome = $_POST['nome'];
$email = $_POST['email'];
$tele = $_POST['telefone'];
$data = $_POST['dataNas'];
$dataFormatada = date_create_from_format('d/m/Y', $data)->format('Y-m-d');
$senha = $_POST['senha'];


if (conectaBD()) {

  echo insereUsuario($nome, $email, $senha,$dataFormatada,$tele);
  
  header('Location: index.html');
  
} else {
  echo "Erro ao conectar";
}



?>