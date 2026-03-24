<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="form.css">
    <style>
        section.log a{
            margin: 5px 10px;
            text-decoration: none;
            color: #2c3e50;
            font-size: 1.1em;
        }

        section.log a:hover{
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="sep">
        <header>
            <?php include('menu.php')?>
        </header>
        <main>
            <section class="log">
                <h1>Faça seu login</h1>
                <form action="#" method="POST">
                    <div class="space">
                        <label for="iuser">Usuário</label>
                        <input type="text" name="user" id="iuser" placeholder="Digite seu nome de usuário">
                    </div>
                    <div class="space">
                        <label for="isen">Senha</label>
                        <input type="password" name="sen" id="isen" placeholder="Digite sua senha">
                    </div>
                    <a href="#">Esqueci minha senha</a>
                    <a href="#">Não possuo uma conta cadastrada</a>
                </form>
            </section>
        </main>
    </div>
    <footer>
        <?php include('rodape.php')?>
    </footer>
</body>
</html>