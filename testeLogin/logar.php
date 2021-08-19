<?php

    if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])) {
        # code...

        require 'conexao.php';
        require 'Usuario.class.php';

        $u = new Usuario();
        
        $email = addslashes($_POST['email']);
        $password = addslashes($_POST['password']);
        
        if($u->login($email, $password) == true){
            if (isset($_SESSION['idusuario'])) {
                # tudo ok, pode entrar!
                ?>
                    <script>
                        window.location.href = "index.php"
                    </script>
                <?php

            }else {
                # logue de novo malandrão
                ?>
                    <script>
                        window.location.href = "login.php"
                    </script>
                <?php
            }
        }else{
            ?>
                <script>
                    window.location.href = "login.php"
                </script>
            <?php
        }

    }else{
        ?>
            <script>
                window.location.href = "login.php"
            </script>
        <?php
        echo "Voce nao tem permissao para acessar essa pagina!";
    }
?>