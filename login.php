<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="form.css">
    <style>
        main{
            height: 100vh;
        }

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
    <main>
        <section class="log">
            <h1>Faça seu login</h1>
            <form action="validacao.php" method="POST">
                <div class="space">
                    <label for="iuser">Usuário</label>
                    <input type="text" name="user" id="iuser" placeholder="Digite seu nome de usuário">
                </div>
                <div class="space">
                    <label for="isen">Senha</label>
                    <input type="password" name="sen" id="isen" placeholder="Digite sua senha">
                </div>
                <div class="space">
                    <input type="submit" value ="Enviar" class="esp-btn">
                    <input type="button" value="Esqueci minha senha" class="esp-btn">
                    <input type="button" value="Não possuo uma conta cadastrada" class="esp-btn">
                </div>
                <?php if(isset($_GET['erro'])):?>
                    <p class="error-alert">Usuário ou senha incorretos!!</p>
                <?php endif; ?>
            </form>
        </section>
    </main>
    </div>
    <footer>
        <?php include('rodape.php');?>
    </footer>
</body>
</html>