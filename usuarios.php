<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Usuário</title>
    <script src="https://kit.fontawesome.com/52ff4c741b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        h1{
            padding: 20px;
        }

        main{
            margin: 20px;
        }
        
        section{
            background-color: white;
            margin: auto;
            max-width: 500px;
            padding: 10px;
            border-radius: 15px;
            color: #2c3e50;
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.219);
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

        select{
            padding: 10px;
            border-radius: 10px;
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
        <header><?php include("menu.php");?></header>
        <main>
            <section>
                <h1><i class="fa-solid fa-user-plus"></i> Cadastro de usuário</h1>
                <p>Preencha os dados para realizar um novo acesso</p>
                <form action="#" method="POST">
                    <div class="space">
                        <label for="inome">Nome completo</label>
                        <input type="text" name="nome" id="inome" placeholder="Digite o nome completo">
                    </div>
                    
                    <div class="space">
                        <label for="imail">E-mail</label>
                        <input type="email" name="mail" id="imail" placeholder="Digite o e-mail">
                    </div>
                    
                    <div class="space">
                        <label for="isen">Senha</label>
                        <input type="password" name="senha" id="isenha" placeholder="Digite sua senha">
                    </div>
                    
                    <div class="space">
                        <label for="inivel">Nível</label>
                        <select name="nivel" id="inivel">
                            <option value="user">Usuário</option>
                            <option value="admin">Administrador</option>
                        </select>
                    </div>

                    <div class="space">
                        <input type="submit" value="Salvar" class="esp-btn">
                        <input type="reset" value="Limpar" class="esp-btn">
                    </div>
                </form>
            </section>
        </main>
    </div>
    <footer><?php include("rodape.php");?></footer>
</body>
</html>