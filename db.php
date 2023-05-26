
<?php
function conectaBD(){
    $con=new PDO("mysql:host=localhost;dbname=web","root","aluno");
    return $con;
}

function insereUsuario ($nome,$email,$senha){
    try{
        $con=conectaBD();

        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO usuario (nome,login,senha) VALUES (?,?,?)";

    $stm=$con->prepare($sql);
    $stm->bindParam(1,$nome);
    $stm->bindParam(2,$email);
    $stm->bindParam(3,$senha);
    $stm->execute();
    } catch(PDOExeption $e) {
        echo 'ERROR: '. $e->getMessage();

    }
    
    

    return $con->lastInsertId();
}

    function deletaUsuario($id){
        $con=conectaBD();
        $sql="DELETE FROM usuario WHERE id=?";
        try{
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stm->bindParam(1,$id);
            $stm->execute();

        }catch (PDOException $e){

            echo 'ERROR: '. $e->getMessage();

        }
    }

    function recuperaUsuario($id){
        $con=conectaBD();
        $sql="SELECT * FROM usuario WHERE id=?";
        $stm=$con->prepare($sql);
        $stm->bindParam(1,$id);
        $stm->execute();
        $result=$stm->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    
    function recuperaALL(){
        $con=conectaBD();
        $sql="SELECT * FROM usuario";
        $stm=$con->prepare($sql);
    
        $stm->execute();
        $result=$stm->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
 ?>
