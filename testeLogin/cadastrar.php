<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        #nome, #confirmPass{
            padding: 10px;
            width: 100%;
            border-radius: 6px;
            border: none;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo"><img src="" alt="logo">Logo</div>

        <nav>
            <ul>
                <li><a href="login.php">Entre</a></li>
            </ul>
        </nav>
    </header>
    <main>

        <form class="form" action="efetuar_cadastro.php" method="post">

            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password">
            <label for="confirmPass">Confirmar senha:</label>
            <input type="password" name="confirmPass" id="confirmPass">
            
            <input type="submit" id="botao" value="cadastrar">

        </form>

    </main>
    <footer>

    </footer>
</body>
</html> 