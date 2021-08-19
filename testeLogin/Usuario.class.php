<?php

    class Usuario{
        public function login($email, $password){
            global $pdo;
            $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :password";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("email", $email);
            $sql->bindValue("password", md5($password));
            $sql->execute();


            if ($sql->rowCount() > 0) {
                # code...
                $dado = $sql->fetch();
                // echo $dado['idusuario'];

                $_SESSION['idusuario'] = $dado['idusuario'];

                return true;
            }else{
                return false;
            }



        }

        public function logged($id){
            global $pdo;

            $array = array();

            $sql = "SELECT nome FROM usuarios WHERE idusuario = :id";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("id", $id);
            $sql->execute();

            if ($sql->rowCount() > 0) {
                # code...
                $array = $sql->fetch();
            }

            return $array;

        }

        public function cadastro($nome, $email, $password){
            global $pdo;

            $sql = "SELECT * FROM usuarios WHERE email = :email ";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("email", $email);
            $sql->execute();


            if ($sql->rowCount() > 0) {
                # code...
                $dado = $sql->fetch();
                echo "Email já cadastrado.";
                return false;
            }else{
                
                $sql = "INSERT INTO usuarios (idusuario, nome, email, senha) VALUES (NULL, :nome, :email, :password)";
                $sql = $pdo->prepare($sql);
                $sql->bindValue("nome", $nome);
                $sql->bindValue("email", $email);
                $sql->bindValue("password", md5($password));
                $sql->execute();

                echo "Cadastrado com sucesso!";
            }


        }
    }

?>