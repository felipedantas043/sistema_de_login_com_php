<?php
    require 'conexao.php';
    if (isset($_SESSION['idusuario']) && !empty($_SESSION['idusuario'])){
        require_once 'Usuario.class.php';

        $u = new Usuario();

        $userLogged = $u->logged($_SESSION['idusuario']);
        $nomeUser = $userLogged['nome'];

    }else {
        header("Location: login.php");
    }
?>