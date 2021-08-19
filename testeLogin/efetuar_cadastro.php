<?php
    
    if (isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['confirmPass']) && !empty($_POST['confirmPass'])) {
        # code...

        require 'conexao.php';
        require 'Usuario.class.php';

        $u = new Usuario();

        $nome = $_POST['nome']; 
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPass = $_POST['confirmPass'];

        $u->cadastro($nome, $email, $password);

    }else {
        #redireciona de volta
        echo "erro";
    }


?>