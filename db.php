
<?php
function conectaBD(){
    $con=new PDO("mysql:host=localhost;dbname=web","root","aluno");
    return $con;
}

function insereUsuario ($nome,$email,$senha){
    try{
        $con=conectaBD();

        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO usuario (nome,email,senha) VALUES (?,?,?)";

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

    function verificarCredenciais($email, $senha) {
        $con=conectaBD();
       
        // Consulta SQL para verificar as credenciais
        $sql = "SELECT * FROM usuario WHERE email = ? AND senha = ?";
        $stm= $con->prepare($sql);
        $stm->bindParam(1,$email);
        $stm->bindParam(2,$senha);
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        
       
        // Verifica se a consulta retornou algum resultado
        if (count($result) > 0) {
            // As credenciais são válidas
        
            return true;
        } else {
            // As credenciais são inválidas
        
        
            return false;
        }
    }
 ?>
