<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(nome da loja)</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo"><img src="" alt="logo">Logo</div>

        <nav>
            <ul>
                <li><a href="cadastrar.php">Cadastre-se</a></li>
            </ul>
        </nav>
    </header>
    <main>

        <form class="form" action="logar.php" method="post">
            
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="felipedantas043@gmail.com">
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password">
            
            <input type="submit" id="botao" value="Acessar">

        </form>

    </main>
    <footer>

    </footer>
</body>
</html> 