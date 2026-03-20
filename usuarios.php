<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/52ff4c741b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        main{
            align-self: center;
        }

        h1{
            padding: 20px;
        }

        main{
            margin: 10px;
        }
        
        section{
            background-color: white;
            margin: auto;
            max-width: 500px;
            padding: 10px;
            border-radius: 15px;
            color: #2c3e50;
        }

        form{
            display: flex;
            flex-direction: column;
        }

        div.space{
            display: flex;
            flex-direction: column;
            padding: 10px;
            width: 400px;
        }

        form label{
            font-size: 1.5em;
        }

        form input{
            padding: 10px;
            border-radius: 10px;
            border: 1px solid rgb(144, 150, 156);
            margin: 5px 0px;
        }

        .esp-btn{
            background-color: #537597;
            color: white;
            cursor: pointer;
        }

        .esp-btn:hover{
            background-color: #9cb7d1;
        }

        @media screen and (min-width: 1200px) {
            main{
                font-size: 1.3em;
            }

            section{
                padding: 30px;
            }

            div.space{
                width: 500px;
            }
        }
    </style>
</head>
<body>
    <div class="sep">
        <header>
                <div id="perfil">
                    <img src="https://ui-avatars.com/api/?name=Pedro+Giacciani&background=008080&color=fff" alt="Avatar">
                    <span>Pedro Giacciani</span>
                </div>
                <hr>
                <nav id="links">
                    <a href="dashboard.php">Ínicio</a>
                    <a href="usuarios.php">Usuários</a>
                    <a href="#">Relatórios</a>
                    <a href="#">Configurações</a>
                </nav>
        </header>
        <main>
            <section>
                <h1><i class="fa-solid fa-user-plus"></i> Cadastro de usuário</h1>
                <p>Preencha os dados para realizar um novo acesso</p>
                <form action="#">
                    <div class="space">
                        <label for="inome">Nome completo</label>
                        <input type="text" name="nome" id="inome" placeholder="Digite o nome completo">
                    </div>
                    
                    <div class="space">
                        <label for="imail">E-mail</label>
                        <input type="email" name="mail" id="imail" placeholder="Digite o e-mail">
                    </div>
                    
                    <div class="space">
                        <label for="inivel">Nível</label>
                        <input type="text" name="nivel" id="inivel" placeholder="Digite seu nível de acesso">
                    </div>

                    <div class="space">
                        <input type="submit" value="Enviar" class="esp-btn">
                        <input type="reset" value="Limpar" class="esp-btn">
                    </div>
                </form>
            </section>
        </main>
    </div>
    <footer>
        <p>&copy; <?php echo date('Y');?> - Desenvolvido na aula de programação pra web I por <a href="https://github.com/pedrogiacciani" target="_blank">Pedro Giacciani</a></p>
    </footer>
</body>
</html>