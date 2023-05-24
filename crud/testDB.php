<?php
    include_once "db.php";

    if (conectaBD()) {
        echo "Conectado com sucesso!";
        echo  insereUsuario("Enzo","wnzo@gmail.com","123");
        echo "<br><pre>";
        var_dump(recuperaALL());

        echo "</pre>";
    } else {
        echo "Erro ao conectar!";
    }

    
?>
